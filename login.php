

<?php

    if(!empty($_POST['email1']) && !empty($_POST['password1'])) 
      {while($tab=mysql_fetch_array($result))
        {
         if($_POST['email1']==$tab[3] && $_POST['password1']==$tab[4])
         {
          session_start();
          $_SESSION['acces']="yes";
          $_SESSION['Fname']=$tab[1];
          $_SESSION['user']=$tab[3];
          $_SESSION['level']=$tab[9];
          $_SESSION['score']=$tab[10];

          $_SESSION['grammar']= $tab[13];
          $_SESSION['reading'] =$tab[11];
          $_SESSION['listening']= $tab[12];
          $_SESSION['dictation']=$tab[14];
          header("Location: welcome.php");
          $verif=true;
          break;
        }
        else $_SESSION['acces']="no";
    }
   // if($verif==false) {echo "<script type=\"text/javascript\">alert(\"Wrong Username or Password!\");</script>";}
  }

?>