<!DOCTYPE html>
<html>
    <head>
        <title>Thanks for Subscribing</title>
        
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header><a href="index.html"><img src="theloaflogo.png" alt="the loaf logo" height="250px" width="350" /></a></header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about/index.html">About The Loaf</a></li>
            </ul>
        </nav>
        <section>
            <h1>You're Signed Up!</h1>
            <h3>Thanks for Subscribing.</h3>
            
            <?php
                $to="theloafreviews@gmail.com";
                $subject="Newsletter Signup";
                $email=$_POST["email"];
                $message= "$email has signed up for The Loaf Reviews Newsletter";
                mail($to, $subject, $message);
                
            ?>
            You'll now recieve weekly updates from The Loaf Reviews at
            <?php 
                echo $email;
            ?>
        </section>
        <footer>
            <ul>
                <li><a href="about/index.html">About</a></li>
                <li><a href="contact_us/index.html">Contact Us</a></li>
                <li><a href="https://www.facebook.com/theloafreviews/"><img src="facebook.png" alt="facebook logo" height="30" width="30"/></a></li>
                <li><a href="https://www.twitter.com/theloafreviews/"><img src="twitter.png" alt="twitter logo" height="30" width="30"/></a></li>
            </ul>
        </footer>
    </body>
</html>