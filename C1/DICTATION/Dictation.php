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
    <title>Dictation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/MiniProjet/welcome.css">

</head>
<body>
      <div align="right"><a href="http://localhost/MiniProjet/logout.php"><input type="button" style="    width: 100px;
    font-size: 20px;
    border: 0px solid #fff;
    border-radius: 50px;
" value="Log out"/></a></div>
    <div class="grid">
        <div id="quiz">
            <h1>Dictation</h1>
            <div align="center">
            <audio controls preload="metadata" loop>
                <source src="dictation.mp3">
                <source src="dictation.ogg">
            </audio>
        </div>
            <hr style="margin-bottom: 20px">
            <form method="POST" action='<?= $_SERVER["PHP_SELF"] ?>' enctype="application/x-www-form-urlencoded"> 
            <p style="color: #FFFFFF"> This morning, I <input type="text" name="word1" id="word1"> woke up at 8am.<br>Because I woke up late, I had to <input type="text" name="word2" id="word2"> hurry up to  get <input type="text" name="word3" id="word3"> ready for work.  I <input type="text" name="word4" id="word4">called my boss to <input type="text" name="word5" id="word5"> let her know that  I was on my <input type="text" name="word6" id="word6">way and that I would be <input type="text" name="word7" id="word7">bringing in donuts. <br> My boss was <input type="text" name="word8" id="word8">happy to know that she would be getting <input type="text" name="word9" id="word9">breakfast and did not care <input type="text" name="word10" id="word10">anymore that I was late.</p>
            
            <hr style="margin-top: 50px">
            <footer>
                <center><input type=submit id="bnt0" name=Envoyer value=Valider></center><br>
            </footer>
        </form>
        </div>
        
    </div>
<?php

if (isset($_POST['Envoyer']))
{
    $score=0;
    $choices =Array("woke","hurry","ready","called","let","way","bringing","happy","breakfast","anymore");

        if ($_POST["word1"] == $choices[0])
            $score+= 2.5;       

        if ($_POST["word2"] == $choices[1])
            $score += 2.5;       

        if ($_POST["word3"] == $choices[2])
            $score += 2.5;       

        if ($_POST["word4"] == $choices[3])
            $score += 2.5;       

        if ($_POST["word5"] == $choices[4])
            $score += 2.5;       

        if ($_POST["word6"] == $choices[5])
            $score += 2.5;       

        if ($_POST["word7"] == $choices[6])
            $score += 2.5;       

        if ($_POST["word8"] == $choices[7])
            $score += 2.5;       

        if ($_POST["word9"] == $choices[8])
            $score += 2.5;       

        if ($_POST["word10"] == $choices[9])
            $score += 2.5;       

   
    
    if ($score <=24)
    {

        header("Location: http://localhost/MiniProjet/C2/DICTATION/Dictation.php");
    }
    else
        {
           
            
            include('C:\xampp\htdocs\MiniProjet\connex.php');
            $user=$_SESSION['user'];
            $req="UPDATE inscription SET dictation='$score' WHERE email='$user'";
            $idcon=connex('accueil','myparam');
            $result1=mysql_query($req,$idcon);
            $z=$_SESSION['grammar'] + $_SESSION['reading'] + $_SESSION['listening'] + $score;
            
            
            $req2="UPDATE inscription SET score='$z' WHERE email='$user'";
            $_SESSION['dictation']=$score;
            $_SESSION['score']=$z;

            $result=mysql_query($req2,$idcon);

            if ($_SESSION['score']>96) 
                {$req3="UPDATE inscription SET level='tarchon' WHERE email='$user'" ;
                 $result3=mysql_query($req3,$idcon);             
                   echo " <script type='text/javascript'> alert('vous avez réussi le niveau'); </script> ";
                   header("Location: http://localhost/MiniProjet/C2/accueil1.php");            }

            if(!$result)
            {
                echo " <script type='text/javascript'> alert('ERROR of modification of your score!');</script>"; 
            }

            header("Location: http://localhost/MiniProjet/C2/accueil1.php");
        
        }
}
?>
</form>


</body>
</html>
