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
    <title>grammaire</title>

    <link rel="stylesheet" type="text/css" href="welcome.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
 <div align="right"><a href="http://localhost/MiniProjet/logout.php"><input type="button" style="    width: 100px;
    font-size: 20px;
    border: 0px solid #fff;
    border-radius: 50px;
" value="Log out"/></a></div>
    <div class="grid">
        <div id="quiz">
            <h1>Grammar :</h1>
            <hr >
            <form method="post" action='<?= $_SERVER["PHP_SELF"] ?>' enctype="application/x-www-form-urlencoded">

            <li style="color: #FFFFFF">The baby boy saw   <input type="text" name="word1" id="word1"> ["himself", "itself","yourself", "herself"] in the mirror and started to cry</li>

            <li style="color: #FFFFFF">The baby boy saw   <input type="text" name="word2" id="word2"> ["himself", "itself","yourself", "herself"] in the mirror and started to cry</li>

            <li style="color: #FFFFFF">A lot of trains <input type="text" name="word3" id="word3">["are run"," run","are running","ran" ] late today due to the heavy storms"</li> 
            
            <li style="color: #FFFFFF">  <input type="text" name="word4" id="word4"> ["there", "this","where", "this"] was a strong wind last night </li> 

            <li style="color: #FFFFFF"> He went to the Stadium <input type="text" name="word5" id="word5"> ["with taxi", "by taxi"," on taxi" ,"in taxi"]</li> 
        
            <li style="color: #FFFFFF"> Peter <input type="text" name="word6" id="word6">["to going", "goes tp","is going to", "go to"] fly to San Francisco tomorrow </li> 
                
            <li style="color: #FFFFFF"> He <input type="text" name="word7" id="word7">["does","has","haven't", "hadn't"] never been to America  </li>     

            <li style="color: #FFFFFF"> We haven't got  <input type="text" name="word8" id="word8">["A lot", "some", "any", "many"] money  </li>     
            
             <li style="color: #FFFFFF">Where <input type="text" name="word9" id="word9"> ["does he live","was he live","was he living" ,"is he living"] when you met him </li> 

            <li style="color: #FFFFFF">"You should not have behaved like that"  <input type="text" name="word10" id="word10">  ["Haven't you","Should you","Shouldn't you","Would you"]  </li>
             <hr style="margin-top: 50px">
            
        </div>
       <center> <input type=submit  id="btn0" name=Envoyer value=Valider></center><br>
<?php

// on n'affiche les résultats que si le formulaire a bien été soumis
if (isset($_POST['Envoyer']))
{
    $score=0;
    $choices =Array("himself","himself","are running","there","in taxi","is going","has","some","was he living","haven't you");

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

        header("Location: http://localhost/MiniProjet/A1/GRAMMAR/Grammaire.php");
    }
    else
        {
            
            include('C:\xampp\htdocs\MiniProjet\connex.php');
            $user=$_SESSION['user'];
            $req="UPDATE inscription SET grammar='$score' WHERE email='$user'";
            $idcon=connex('accueil','myparam');
            $result1=mysql_query($req,$idcon);
            $z=$_SESSION['dictation'] + $_SESSION['reading'] + $_SESSION['listening'] + $score;
            
            
            $req2="UPDATE inscription SET score='$z' WHERE email='$user'";
            $_SESSION['grammar']=$score;
            $_SESSION['score']=$z;

            $result=mysql_query($req2,$idcon);

            if ($_SESSION['score']>96) 
                {$req3="UPDATE inscription SET level='A2' WHERE email='$user'" ;
                 $result3=mysql_query($req3,$idcon); 
                 $x=0;
                  $_SESSION['grammar']=0;
                  $_SESSION['reading'] =0;
                  $_SESSION['listening']=0;
                  $_SESSION['dictation']=0;
                 $req4="UPDATE inscription SET score='$x' WHERE email='$user'" ;
                 $result4=mysql_query($req4,$idcon); 
                   if($result3)             
                   {          
                   echo " <script type='text/javascript'> alert('vous avez réussi le niveau'); </script> ";
                   header("Location: http://localhost/MiniProjet/A1/accueil1.php");            
               }
                }
            if(!$result)
            {
                echo " <script type='text/javascript'> alert('ERROR of modification of your score!');</script>"; 
            }

            header("Location: http://localhost/MiniProjet/A2/accueil1.php");
        }
}


?>

       
</form>
</body>
</html>