<?php
session_start ();
if ($_SESSION['acces']=="no") 
{
  header("Location: http://localhost/MiniProjet/page0.php");  
}
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="welcome.css">

</head>

<body background="http://localhost/MiniProjet/welcome.jpg">
<a href="http://localhost/MiniProjet/logout.php"><input type="button" id="logout"  value="Log out"/></a>

    <div class="grid">

        <h1>WELCOME :</h1>
        <div id="quiz">
            <p align="center" style="color: #95a5a6; font-family: IMPACT; font-size: 35px">
            <br>Hello  

            <?php 
            $fname=$_SESSION['Fname'];
            echo "<b style=\"color: #95a5a6; font-family: IMPACT; font-size: 35px\">".$fname."</b>";
            ?>  
            <br><br>Your Level is : &nbsp
            <?php 

            $level=$_SESSION['level'];
            echo "<b style=\"color: #95a5a6; font-family: IMPACT; font-size: 35px\">".$level."</b>";
            ?>
            <br><br>
            Your Score is : &nbsp
            <?php 

            $score=$_SESSION['score'];
            echo "<b style=\"color: #95a5a6; font-family: IMPACT; font-size: 35px\">".$score."</b>";
            ?>

            </p>

                    <div class="buttons">
            <?php 
            $a=$_SESSION['level'];
            if ($a=="NULL") 
            echo " <center><a href='http://localhost/MiniProjet/A1/accueil1.php'> <input type='button' id='btn' name='start' value='START'> </a></center>"; 

            elseif ($a=="A1") 
            echo " <center><a href='http://localhost/MiniProjet/A2/accueil1.php'><input type='button' id='btn' name='start' value='START'> </a></center>"; 
            
            elseif ($a=="A2") 
            echo " <center><a href='http://localhost/MiniProjet/B1/accueil1.php'> <input type='button' id='btn' name='start' value='START'> </a></center>"; 

            elseif ($a=="B1") 
            echo " <center><a href='http://localhost/MiniProjet/B2/accueil1.php'> <input type='button' id='btn' name='start' value='START'> </a></center>";
            elseif ($a=="B2") 
            echo " <center><a href='http://localhost/MiniProjet/C1/accueil1.php'> <input type='button' id='btn' name='start' value='START'> </a></center>"; 
            elseif ($a=="C1") 
            echo " <center><a href='http://localhost/MiniProjet/C2/accueil1.php'> <input type='button' id='btn' name='start' value='START'> </a></center>"; 
            else echo " <center><a href='http://localhost/MiniProjet/page0.php'> <input type='button' id='btn' name='start' value='ERROR'> </a></center>";
            ?>
            </div>  
        </div>
    </div>
</body>
</html>