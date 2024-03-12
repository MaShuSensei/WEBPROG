<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MaShu's Shack - Home</title>
        <link rel="icon" href="Assets/Icon.ico">
        <link rel="stylesheet" href="styles.css">
    </head>
    <?php
        // 1. Introduction
        echo "Hello, 1st time\n";

        // 2. Variables
        $name = "Matt";
        $age = 22;

        // 3. Echo / Print
        echo "My name is $name and I am $age years old.\n";

        // 4. Data Types
        $string = "This is a string";
        $integer = 27;
        $float = 2.28;
        $boolean = true;
        $array = array(1, 2, 3);

        // 5. Operators & Math
        $num1 = 10;
        $num2 = 5;
        $sum = $num1 + $num2;
        $difference = $num1 - $num2;
        $product = $num1 * $num2;
        $quotient = $num1 / $num2;
        $remainder = $num1 % $num2;    
    ?>
    <body class="ani">
        <div class="fll_home">
            <div class="navbar">
                <div class="navbar_slct">
                    <a href="home.html">Home</a>
                    <a href="profile.html">PROFILE</a>
                    <a href="about.html">ABOUT ME</a>
                    <a href="gallery.html">Gallery</a>
                    <a href="contact.html"><img id="logo" src="Assets/logo.png" alt="MaShu's Shack" width="40px"></a>
                </div>
            </div>
            <h1 class="title">
                Welcome to MaShu's Shack!
            </h1>    
            <div class="hm_cntnt">
                <div class="cntnr_home">
                    <p id="intro">
                        Hi! I am Matt, <br>A student at Asia Pacific College, 
                        studying for a Bachelor's degree in Information and Technology with 
                        a focus on Mobile and Internet technologies. <br> <br>

                        I'm drawn to programming because I'm curious about how advanced software is created. 
                        I want to develop my own software applications and share them with others to make their lives easier. 
                    </p>
                    <br>
                    <div >
                        Here are my Social medias:
                        <div class="socmed">
                            <a href="https://www.facebook.com/weehhneerr/" target="_blank"><img class="fblogo" src="Assets/fblogo.ico" width="40px" height="40px"></a>
                            <a href="https://www.instagram.com/msh.0027/" target="_blank"><img class="iglogo" src="Assets/instalogo.ico" width="50px"></a>
                            <a href="https://github.com/MaShuSensei/" target="_blank"><img class="gh" src="Assets/github.ico" width="50px"></a>
                            <a href="https://www.linkedin.com/in/matthew-paren-22a0a5259/" target="_blank"><img class="gh" src="Assets/linkedin.ico" width="50px"></a>    
                        </div>
                        <div id='socmed' alt="htmldom"></div>
                    </div>
                </div>
                <img id="matt" id="img" src="Assets/pfp2.jpg" alt="Matt" width="300px" >
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>