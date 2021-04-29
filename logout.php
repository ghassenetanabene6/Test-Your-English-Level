<?php
session_start();

$_SESSION = array();


include('C:\xampp\htdocs\MiniProjet\connex.php');
$user=$_SESSION['user'];
$level=$_SESSION['level'];
//ce test permet de supprimer le compte si l'utilisateur a terminé tous les niveaux avec succès
if($level="C2")
{
$req="delete from inscription WHERE email='$user'and level='C2'";
$result=mysql_query($req,$idcon);
}  
session_destroy();

header("location: http://localhost/MiniProjet/page0.php");
exit;
?>