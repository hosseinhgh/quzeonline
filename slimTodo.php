<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();

require_once 'vendor/autoload.php';

DB::$dbName = 'cp4809_horoExamOnline';
DB::$user = 'cp4809_horoExamO';
DB::$encoding = 'utf8';
DB::$password = 'horoExamOnline';
DB::$host = 'ipd10.com';
//ia3ohic8
DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';

function sql_error_handler($params) {
    global $app, $log;
    $log->err("SQL Error: " . $params['error']);
    $log->err(" in query: " . $params['query']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

function nonsql_error_handler($params) {
    global $app, $log;
    $log->err("SQL Error: " . $params['error']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));


if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}

$twig = $app->view()->getEnvironment();
$twig->addGlobal('userSession', $_SESSION['user']);

$app->get('/', function() use ($app) {
    $todoList = array();
    if ($_SESSION['user']) {
        $todoList = DB::query('SELECT * FROM todos WHERE adminId=%i', $_SESSION['user']['id']);
    }
    $app->render('index.html.twig', array('todoList' => $todoList));
});
$app->get('/sumaryQuestions', function() use ($app) {
    
    if ($_SESSION['user']) {
        $countQuestions = DB::queryFirstField('SELECT COUNT(*) FROM questions');
        $count = array(
            'countQ' => $countQuestions,
        );
    }
    $app->render('summaryQuestions.html.twig');
    
});



$app->get('/listSubject', function() use ($app) {
    $subjectList = array();
    if ($_SESSION['user']) {
        $subjectList = DB::query('SELECT * FROM subjects');
    }
    $app->render('listSubject.html.twig', array('subjectList' => $subjectList));
});

$app->get('/logout', function() use ($app) {
    $_SESSION['user'] = array();
    $app->render('logout.html.twig', array('userSession' => $_SESSION['user']));
});

$app->get('/login', function() use ($app) {
    $app->render('login.html.twig');
});

$app->post('/login', function() use ($app) {
    $email = $app->request()->post('email');
    $pass = $app->request()->post('pass');
    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    $error = false;
    if (!$row) {
        $error = true; // user not found
    } else {
        if (password_verify($pass, $row['password']) == FALSE) {
            $error = true; // password invalid
        }
    }
    if ($error) {
        $app->render('login.html.twig', array('error' => true));
    } else {
        unset($row['password']);
        $_SESSION['user'] = $row;
        $app->render('login_success.html.twig', array('userSession' => $_SESSION['user']));
    }
});

$app->get('/isemailregistered/:email', function($email) use ($app) {
    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    echo!$row ? "" : '<span style="background-color: red; font-weight: bold;">Email already taken</span>';
});

$app->get('/register', function() use ($app) {
    $app->render('register.html.twig');
});

$app->post('/register', function() use ($app) {
    $name = $app->request()->post('name');
    $email = $app->request()->post('email');
    $pass1 = $app->request()->post('pass1');
    $pass2 = $app->request()->post('pass2');
    //
    $values = array('name' => $name, 'email' => $email);
    $errorList = array();
    //
    if (strlen($name) < 2 || strlen($name) > 50) {
        $values['name'] = '';
        array_push($errorList, "Name must be between 2 and 50 characters long");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        $values['email'] = '';
        array_push($errorList, "Email must look like a valid email");
    } else {
        $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
        if ($row) {
            $values['email'] = '';
            array_push($errorList, "Email already in use");
        }
    }
    if ($pass1 != $pass2) {
        array_push($errorList, "Passwords don't match");
    } else { // TODO: do a better check for password quality (lower/upper/numbers/special)
        if (strlen($pass1) < 2 || strlen($pass1) > 50) {
            array_push($errorList, "Password must be between 2 and 50 characters long");
        }
    }
    //
    if ($errorList) { // 3. failed submission
        $app->render('register.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else { // 2. successful submission
        $passEnc = password_hash($pass1, PASSWORD_BCRYPT);
        DB::insert('users', array('name' => $name, 'email' => $email, 'password' => $passEnc));
        $app->render('register_success.html.twig');
    }
});

$app->get('/addStudent', function() use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $app->render('todo_addedit.html.twig');
});

$app->post('/addStudent', function() use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    
    $id = -1; // FIXME
    
    $firstName = $app->request()->post('firstName');
    $lastName = $app->request()->post('lastName');
    $email = $app->request()->post('email');
    $gender = empty($gender) ? "male" : "female";
    
    //
    $values = array(
        'adminId' => $_SESSION['user']['id'],
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'gender' => $gender,
        'email' => $email);

    $errorList = array();
    //
    if (strlen($firstName) < 2 || strlen($firstName) > 50) {
        $values['firstName'] = '';
        array_push($errorList, "name must be between 2 and 50 characters long");
    }
    if (strlen($lastName) < 2 || strlen($lastName) > 50) {
        $values['firstName'] = '';
        array_push($errorList, "name must be between 2 and 50 characters long");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        $values['email'] = '';
        array_push($errorList, "Email must look like a valid email");
    } else {
        $row = DB::queryFirstRow("SELECT * FROM todos WHERE email=%s", $email);
        if ($row) {
            $values['email'] = '';
            array_push($errorList, "Email already in use");
        }
    }
    //
    
    $productImage = array();
    // is file being uploaded
    if ($_FILES['image']['error'] != UPLOAD_ERR_NO_FILE) {
        $productImage = $_FILES['image'];
        if ($productImage['error'] != 0) {
            array_push($errorList, "Error uploading file");
            $log->err("Error uploading file: " . print_r($productImage, true));
        } else {
            if (strstr($productImage['name'], '..')) {
                array_push($errorList, "Invalid file name");
                $log->warn("Uploaded file name with .. in it (possible attack): " . print_r($productImage, true));
            }
            // TODO: check if file already exists, check maximum size of the file, dimensions of the image etc.
            $info = getimagesize($productImage["tmp_name"]);
            if ($info == FALSE) {
                array_push($errorList, "File doesn't look like a valid image");
            } else {
                if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/gif' || $info['mime'] == 'image/png') {
                    // image type is valid - all good
                } else {
                    array_push($errorList, "Image must be a JPG, GIF, or PNG only.");
                }
            }
        }
    } else { // no file uploaded
        if ($op == 'add') {
            array_push($errorList, "Image is required when registering new student");
        }
    }

    //
    if ($errorList) { // 3. failed submission
        $app->render('todo_addedit.html.twig', array(
            'errorList' => $errorList,
            'isEditing' => ($id != -1),
            'v' => $values));
    } else { // 2. successful submission
        if ($productImage) {
            $sanitizedFileName = preg_replace('[^a-zA-Z0-9_\.-]', '_', $productImage['name']);
            $imagePath = 'uploads/' . $sanitizedFileName;
            if (!move_uploaded_file($productImage['tmp_name'], $imagePath)) {
                $log->err("Error moving uploaded file: " . print_r($productImage, true));
                $app->render('internal_error.html.twig');
                return;
            }
            // TODO: if EDITING and new file is uploaded we should delete the old one in uploads
            $values['imagePath'] = "/" . $imagePath;
        }
        if ($id != -1) {
            DB::update('todos', $values, "id=%i", $id);
        } else {
            DB::insert('todos', $values);
        }
        $app->render('todo_addedit_success.html.twig', array('isEditing' => ($id != -1)));
    }
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));
    


$app->get('/delete/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $todo = DB::queryFirstRow("SELECT * FROM todos WHERE id=%i AND adminId=%i", $id, $_SESSION['user']['id']);
    if (!$todo) {
        echo "Item not found"; // FIXME: 404, not found page
        return;
    }
    $app->render('todo_delete.html.twig', array('todo' => $todo));
});

$app->post('/delete/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        echo 'error: confirmation missing'; // TODO: use template
        return;
    }
    DB::delete('todos', "id=%i AND adminId=%i", $id, $_SESSION['user']['id']);
    if (DB::affectedRows() == 0) {
        echo 'error: record not found'; // TODO: use template
    } else {
        $app->render('todo_delete_success.html.twig');
    }
});


//add subject
$app->get('/addSubject', function() use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $app->render('todo_addeditSubject.html.twig');
});

$app->post('/addSubject', function() use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $name = $app->request()->post('name');
    $description = $app->request()->post('description');
    
    //
    $values = array('name' => $name, 'description' => $description);

    $errorList = array();
    //
    if (strlen($name) < 2 || strlen($name) > 50) {
        $values['name'] = '';
        array_push($errorList, "name must be between 2 and 50 characters long");
    }
    if (strlen($description) < 2 || strlen($description) > 250) {
        $values['description'] = '';
        array_push($errorList, "description must be between 2 and 250 characters long");
    }
    //
    if ($errorList) { // 3. failed submission
        $app->render('todo_addeditSubject.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else { // 2. successful submission
        
        DB::insert('subjects', $values);
        $app->render('todo_addeditSubject_success.html.twig');
    }
});


$app->get('/deleteSubject/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $subject = DB::queryFirstRow("SELECT * FROM subjects WHERE id=%i", $id);
    if (!$subject) {
        echo "Item not found"; // FIXME: 404, not found page
        return;
    }
    $app->render('todo_deleteSubject.html.twig', array('subject' => $subject));
});

$app->post('/deleteSubject/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        echo 'error: confirmation missing'; // TODO: use template
        return;
    }
    DB::delete('subjects', "id=%i", $id);
    if (DB::affectedRows() == 0) {
        echo 'error: record not found'; // TODO: use template
    } else {
        $app->render('todo_delete_success.html.twig');
    }
});

$app->run();