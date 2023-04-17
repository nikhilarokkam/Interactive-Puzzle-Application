<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | Escape Room</title>
    <!-- external links -->
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="dashstyles.css">
</head>
<body>
    <div class="curvy-bg"></div>

    <div class="container">
        <header>
        
            <input type="checkbox" id="toggle">
            <button type="button" id="btn">
                <a href="intro.php" style="font-family:Tahoma;">Let's Play</a>
            </button>
        </header>
        <!-- header ends here -->

        <div class="content-wrapper">
            <img src="All_images/penguin.png" alt="piggy" width="80" height="auto" class="piggy">
            <div class="content-desc">
                <h3>Hello there !</h3>
                <h1 style="font-size:25px;">Welcome to Snowstorm Escape Room ❄️</h1><br><br>
                <!--<h2 style="color:#303E30;">This Puzzle will assess your skills in:<br><br>
                <ul>
                    <li>Attention to detail</li>
                    <li>Perseverance</li>
                    <li>Curiosity</li>
                    <li>Problem Solving</li>
                </ul></h2>-->
               
            </div>

             <!-- hero section right here -->
             <div class="hero-section-wrapper">
                 <div class="hero-image">
                     <img src="images/star.png" alt="star" class="star" width="100" height="auto">
                     <img src="images/key.png" alt="controller"  class="controller">
                     <!-- btn -->
                     
                 </div>
                 
             </div>
        </div>
    </div>
    <img src="images/hombre.png" alt="" class="cap-man" width="300" height="auto">
    <script>
        // select the button

const toggle = document.getElementById('toggle');
const body = document.getElementsByTagName('body');

toggle.addEventListener('click', function (){
    body[0].classList.toggle('dark-theme');
});

const swingIt = document.getElementById('swing-it');
const controller = document.querySelector('.controller');


swingIt.addEventListener('click', function (){
    controller.classList.add('gamepad');
})
    </script>
</body>
</html>