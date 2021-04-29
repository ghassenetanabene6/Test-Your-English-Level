<?php
session_start ();
if ($_SESSION['acces']=="no") 
{
  header("Location: page0.php");  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Beginner</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/MiniProjet/welcome.css">

</head>
<body background="http://localhost/MiniProjet/c10.jpg">
	<a href="http://localhost/MiniProjet/logout.php"><input type="button" id="logout"  value="Log out"/></a>
	<div class="grid">
		<br>
	<p align="center" style="color: #95a5a6; font-family: IMPACT; font-size: 60px">
        Choose your test :
     </p>
		<br>
		<?php 
		if($_SESSION['reading']<25) echo "<center><a href=\"http://localhost/MiniProjet/C2/READING/Reading.php\"> <input type='button' id='btn0' name='start' value='Reading Comprehension'> </a></center>" ; 
		if($_SESSION['listening']<25) echo "<center><a href='http://localhost/MiniProjet/C2/LISTENING/Listening.php'> <input type='button' id='btn0' name='start' value='Listening'> </a></center>";
		if($_SESSION['grammar']<25) echo "<center><a href='http://localhost/MiniProjet/C2/GRAMMAR/Grammaire.php'> <input type='button' id='btn0' name='start' value='Grammar'> </a></center>";
		if($_SESSION['dictation']<25) echo "<center><a href='http://localhost/MiniProjet/C2/DICTATION/Dictation.php'> <input type='button' id='btn0' name='start' value='Dictation'> </a></center>";
		?>
	</div>
</body>
</html>