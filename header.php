<?php
include "config.php";
session_start();
if (!isset($_SESSION['email'])) :
    ?>

<!DOCTYPE html>
<html lang="en">

<head>

   
<link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Real-Skills</title>
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="brand-logo"><img src="images/programing.png" width="50px" height="50px"></div>
            <div class="brand-name">Real-Skills</div>
            <div class="nav-item">
                <ul>
                    
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JAVASCRIPT</a></li>
                    <li><a href="#">PHP</a></li>
                   
                    <?php else:?>
                        <li><a href="register.php">Register</a></li>
                    <li><a href="#">Login</a></li>
                    
                
                   
                    
                   

                    
                      <?php endif; ?> 
                </ul>
            </div>
            <div class="menu">
               <a href="menu.html"><img width="50px" height="50px" src="images/bg-img.jpg">
               </a> 
            </div>
        </div>
    </nav>
   