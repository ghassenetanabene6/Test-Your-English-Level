<?php
if(!empty($_POST["Lname"]) && !empty($_POST["Lname"]) && !empty($_POST["email2"])  && !empty($_POST["password2"])&& isset($_POST["gender"])&& isset($_POST["month"])&& isset($_POST["day"])&& isset($_POST["year"])) 
    { 
  $ok=false;
  $id="\N";
  $firstName=$_POST["Fname"];
  $lastName=$_POST["Lname"];
  $email2=$_POST["email2"];
  $password2=$_POST["password2"];
  $gender=$_POST["gender"];
  $day=$_POST["day"];
  $month=$_POST["month"];
  $year=$_POST["year"];
  $level="NULL";
  $score=0;

  while($tab=mysql_fetch_array($result))
   {if($email2==$tab[3])
     {
       echo "<script type=\"text/javascript\">alert(\"Ouuups ! This Email already exists! Please try another one.\");</script>";
       $ok=true;
       break;
     }}
     if($ok==false)
     {
       $requete_insert="INSERT INTO inscription VALUES('$id','$firstName','$lastName','$email2','$password2','$gender','$day','$month','$year','$level','$score',0,0,0,0)";
       $r=mysql_query($requete_insert,$idcon);
       if(!$r)
       {
        echo "ERROR ! You should retry please.";
        }
      session_start();
      $_SESSION['user']=$_POST['email2'];
      $_SESSION['Fname']=$_POST['Fname'];
      $_SESSION['level']="NULL";
      $_SESSION['acces']="yes";
      $_SESSION['score']=0;

      $_SESSION['grammar']= 0;
      $_SESSION['reading'] =0;
      $_SESSION['listening']=0;
      $_SESSION['dictation']=0;
      header("Location: welcome.php");
    }
  }
?>