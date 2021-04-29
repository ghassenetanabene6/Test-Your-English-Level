<?php
session_start ();
if ($_SESSION['acces']=="no") {
  header("Location: http://localhost/MiniProjet/page0.php");  
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Listening</title>
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
             <p style="font-family: sans-serif;font-size: 20px;
    text-align: center;
    color: #fff;">Listening</p>
            <div align="center">
        	<audio controls preload="metadata" loop>
        		<source src="Listening.mp3">
        		<source src="Listening.ogg">
        	</audio>
        </div>
            <div id="quiz">
            <hr >
            <form style="padding: 10px " method="post" action='<?= $_SERVER["PHP_SELF"] ?>' enctype="application/x-www-form-urlencoded">

            <li style="color: #FFFFFF">The teacher wants the students to   <input type="text" name="word1" id="word1"> ["take notes after she has finished speaking" ,"take notes while she is speaking"," forget about taking notes","concenrate"]</li >

            <li style="color: #FFFFFF">"The teacher suggests eating  <input type="text" name="word2" id="word2">["sugary snacks", "only apples", "fruit and cereals", "soda"]  </ul >

            <li style="color: #FFFFFF">The teacher suggests finding a study place with a lot of  <input type="text" name="word3" id="word3">["light" , "space","books", "moon"]</ul> 
            
            <li style="color: #FFFFFF"> "If students feel stressed they should"<input type="text" name="word4" id="word4"> ["go to bed" ,"go out for a walk", "drink some water","practice sport"]</ul> 

            <li style="color: #FFFFFF"> Students are advised to <input type="text" name="word5" id="word5"> ["select the important things to learn", "read through everything once","make notes about every topic", "concentrate more"] </ul> 
        
            <li style="color: #FFFFFF"> The teacher understands that repeating things can be <input type="text" name="word6" id="word6"> ["difficult", "uninteresting", "tiring" , "soo easy" ] </ul> 
               
            <li style="color: #FFFFFF"> Students can do past exam papers <input type="text" name="word7" id="word7">["in the library only" ,"at home if they take photocopies" ,"in the after-school study group","in groups"] </ul>     

            <li style="color: #FFFFFF"> The teacher recommends a break of five minutes every <input type="text" name="word8" id="word8">["hour" ,"two hours","three hours","thirty minutes"]</ul>     
            
            <li style="color: #FFFFFF">It's important to <input type="text" name="word9" id="word9"> ["eat regularly" ,"sleep when you feel tired","keep hydrated", "rest when you are tired"] </ul> 

           <li style="color: #FFFFFF">It's important to  [" pass their exams" ,"fail their exams","do their best", "cheat in ther exams"]  <input type="text" name="word10" id="word10">[" pass their exams" ,"fail their exams","do their best", "cheat in ther exams"] </ul> 

             <hr style="margin-top: 10px">
            
        </div>
         <center><input type=submit id="bnt0" name=Envoyer value=Valider></center><br>
<?php
if (isset($_POST['Envoyer']))
{
    $score=0;
    $choices =Array("concenrate","fruit and cereals","moon","go out for a walk", "read through everything once" ,"difficult","at home if they take photocopies","two hours","keep hydrated","do their best");


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

        header("Location: http://localhost/MiniProjet/C2/LISTENING/Listening.php");
    }
    else
        {
            
             include('C:\xampp\htdocs\MiniProjet\connex.php');
            $user=$_SESSION['user'];
            $req="UPDATE inscription SET listening='$score' WHERE email='$user'";
            $idcon=connex('accueil','myparam');
            $result1=mysql_query($req,$idcon);
            $z=$_SESSION['dictation'] + $_SESSION['reading'] + $_SESSION['grammar'] + $score;
            
            
            $req2="UPDATE inscription SET score='$z' WHERE email='$user'";
            $_SESSION['listenig']=$score;
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