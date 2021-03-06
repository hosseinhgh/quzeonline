<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>HoRo | Services</title>
        <link rel="stylesheet" href="./css/styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="test your knowledge">
        <meta name="author" content="hossein ghaffary,roberto rubio">
        <meta name="keywords" content="test,online,affordable">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="brand">
                    <img src="images/horoLogo.png" alt="" />
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="current"><a href="services.php">Services</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="register">Register</a></li>
                        <li><a href="login">LogIn</a></li>
                    </ul>
                </nav>
            </div>
        </header><!--end of header-->

        <section id="main">
            <div class="container">
                <article id="mainCol">
                    <h1 class="pageTitle">Services</h1>
                    <ul id="services">
                        <li>
                            <h1>Option1</h1>
                            <p>But I must explain to you how all this mistaken idea of
                            denouncing pleasure and praising pain was born and I
                            will give you a complete account of the system,</p>
                            <p>Pricing: $1000 - $1500</p>
                        </li>
                        <li>
                            <h1>Option2</h1>
                            <p>But I must explain to you how all this mistaken idea of
                            denouncing pleasure and praising pain was born and I
                            will give you a complete account of the system,</p>
                            <p>Pricing: $1500 - $2000</p>
                        </li>
                        <li>
                            <h1>Option2</h1>
                            <p>But I must explain to you how all this mistaken idea of
                            denouncing pleasure and praising pain was born and I
                            will give you a complete account of the system,</p>
                            <p>Pricing: $2000 - $2500</p>
                        </li>
                    </ul>
                </article>

                <aside id="sideBar">
                    <div class="dark">
                        <h3>Get a Quote</h3>
                        <form class="quote">
                            <div>
                                <label>Name</label><br>
                                <input type="text" placeholder="Full Name">
                            </div>
                            <div>
                                <label>Email</label><br>
                                <input type="Email" placeholder="Email Address">
                            </div>
                            <div>
                                <label>Message</label><br>
                                <textarea placeholder="Place Your Message here ..."></textarea>
                            </div>

                            <div id="btn1">
                                <button class="button1" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </section>

        <footer>
            <p>Created by <a href="#">WebSpawn</a>, Copyright Online Examination &copy; 2017</p>
            <script src="js/scrowUpBtn.js"></script>
        </footer>
    </body>
</html>
