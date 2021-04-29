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
    <title>Reading comprehension</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="welcome.css">

</head>
<body>
 <div align="right"><a href="http://localhost/MiniProjet/logout.php"><input type="button" style="    width: 100px;
    font-size: 20px;
    border: 0px solid #fff;
    border-radius: 50px;
" value="Log out"/></a></div>
    	<div class="textee" > <p style="color: #FFFFFF">
There is increasing evidence that the impacts of meteorites have had important effects on Earth,
particularly in the field of biological evolution. Such impacts continue to pose a natural hazard to
life on Earth. Twice in the twentieth century, large meteorite objects are known to have collided
with Earth.
If an impact is large enough, it can disturb the environment of the entire Earth and cause an
ecological catastrophe. The best-documented such impact took place 65 million years ago at the
end of the Cretaceous period of geological history. This break in Earth’s history is marked by a
mass extinction, when as many as half the species on the planet
10 became extinct. While there are a dozen or more mass extinctions in the geological record,
the Cretaceous mass extinction has always intrigued paleontologists because it marks the end
of the age of the dinosaurs. For tens of millions of years, those great creatures had flourished.
Then, suddenly, they disappeared.
15 The body that impacted Earth at the end of the Cretaceous period was a meteorite with a mass
of more than a trillion tons and a diameter of at least 10 kilometers. Scientists first identified
this impact in 1980 from the worldwide layer of sediment deposited from the dust cloud that
enveloped the planet after the impact. This sediment layer is enriched in the rare metal iridium
and other elements that are relatively abundant in a meteorite but
20 very rare in the crust of Earth. Even diluted by the terrestrial material excavated from the crater,
this component of meteorites is easily identified. By 1990 geologists had located the impact site
itself in the Yucatán region of Mexico. The crater, now deeply buried in sediment, was
originally about 200 kilometers in diameter.
25 This impact released an enormous amount of energy, excavating a crater about twice as large
as the lunar crater Tycho. The explosion lifted about 100 trillion tons of dust into the
atmosphere, as can be determined by measuring the thickness of the sediment layer formed
Copyright © 2015 by Educational Testing Service. All rights reserved. ETS, the ETS logo and TOEFL IBT are registered trademarks of Educational Testing Service (ETS).
when this dust settled to the surface. Such a quantity of material would have blocked the
sunlight completely from reaching the surface, plunging Earth into a period
30 of cold and darkness that lasted at least several months. The explosion is also calculated to
have produced vast quantities of nitric acid and melted rock that sprayed out over much of
Earth, starting widespread fires that must have consumed most terrestrial forests and
grassland. Presumably, those environmental disasters could have been responsible for the
mass extinction, including the death of the dinosaurs.
35 Several other mass extinctions in the geological record have been tentatively identified with
large impacts, but none is so dramatic as the Cretaceous event. But even without such
specific documentation, it is clear that impacts of this size do occur and that their results
can be catastrophic. What is a catastrophe for one group of living things, however,
40 may create opportunities for another group. Following each mass extinction, there is a
sudden evolutionary burst as new species develop to fill the ecological niches opened by
the event.
Impacts by meteorites represent one mechanism that could cause global catastrophes and
45 seriously influence the evolution of life all over the planet. According to some estimates,
the majority of all extinctions of species may be due to such impacts. Such a perspective
fundamentally changes our view of biological evolution. The standard criterion for the
survival of a species is its success in competing with other species and adapting to slowly
changing environments. Yet an equally important criterion is the ability of a species to
50 survive random global ecological catastrophes due to impacts.
Earth is a target in a cosmic shooting gallery, subject to random violent events that were
unsuspected a few decades ago. In 1991 the United States Congress asked NASA to
investigate the hazard posed today by large impacts on Earth. The group conducting the
55 study concluded from a detailed analysis that impacts from meteorites can indeed be
hazardous. Although there is always some risk that a large impact could occur, careful
study shows that this risk is quite small </p> </div>
    <div class="grid">
        <div id="quiz">
            <p style="font-family: sans-serif;font-size: 20px;
    text-align: center;
    color: #16a085;">Reading Comprehension</p>
            <hr >
            <form method="Post" action='<?= $_SERVER["PHP_SELF"] ?>' enctype="application/x-www-form-urlencoded">

            <li style="color: #FFFFFF">  The word “pose” on line 2 is closest in meaning to"  <input type="text" name="word1" id="word1"> ["claim","model","assume", "present"]</ul >

            <li style="color: #FFFFFF">The word “excavating” on line 25 is closest in meaning to   <input type="text" name="word2" id="word2"> ["digging out","extending","destroying","covering up"]</ul >

            <li style="color: #FFFFFF">The word “consumed” on line 32 is closest in meaning to <input type="text" name="word3" id="word3">["changed","exposed","destroyed","covered"]</ul>
            
            <li style="color: #FFFFFF"> The phrase “tentatively identified” on line 36 is closest in meaning to <input type="text" name="word4" id="word4">["identified after careful study","identified without certainty","occasionally identified","easily identified"]</ul> 

            <li style="color: #FFFFFF"> According to the passage, who conducted investigations about the current dangers posed by large meteorite impacts on Earth? <input type="text" name="word5" id="word5"> ["Paleontologists", "Geologists", "The United States Congress", "NASA"]</ul>
     
            <li style="color: #FFFFFF"> According to paragraph 3, how did scientists determine that a large meteorite had impacted Earth? <input type="text" name="word6" id="word6">["They discovered a large crater in the Yucatán region of Mexico","They found a unique layer of sediment worldwide","they were alerted by archaeologists who had been excavating in the Yucatán region", "They located a meteorite with a mass of over a trillion tons"] </ul> 
                
            <li style="color: #FFFFFF"> The word “pose” on line 2 is closest in meaning to <input type="text" name="word7" id="word7">["claim","model","assume", "present"]</ul>     

           <li style="color: #FFFFFF"> The word “excavating” on line 25 is closest in meaning to <input type="text" name="word8" id="word8">,["digging out", "extending"," destroying" ,"covering up "] </ul>     
            


            <li style="color: #FFFFFF">The word “consumed” on line 32 is closest in meaning to <input type="text" name="word9" id="word9"> ["changed","exposed","destroyed","covered"] </ul> 

              <li style="color: #FFFFFF">The phrase “tentatively identified” on line 36 is closest in meaning to <input type="text" name="word10" id="word10">  ["identified after careful study" ,"identified without certainty","occasionally identified","easily identified"]  </ul> 

              <hr style="margin-top: 50px">
            <footer>
                <center><input type=submit id="bnt0" name=Envoyer value=Valider></center><br>
            </footer>
        </form>
        </div>
    </div>

<?php
// on n'affiche les résultats que si le formulaire a bien été soumis
if (isset($_POST['Envoyer']))
{
    $score=0;
$choices =Array("assume" , "covering up", "exposed","easily identified" ,"NASA","They found a unique layer of sediment worldwide","assume","covering up","exposed","easily identified") ;
    

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

        header("Location: http://localhost/MiniProjet/C2/READING/Reading.php");
    }
    else
        {   
             include('C:\xampp\htdocs\MiniProjet\connex.php');
            $user=$_SESSION['user'];
            $req="UPDATE inscription SET reading='$score' WHERE email='$user'";
            $idcon=connex('accueil','myparam');
            $result1=mysql_query($req,$idcon);
            $z=$_SESSION['dictation'] + $_SESSION['listening'] + $_SESSION['grammar'] + $score;
            
            
            $req2="UPDATE inscription SET score='$z' WHERE email='$user'";
            $_SESSION['listeni']=$score;
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
