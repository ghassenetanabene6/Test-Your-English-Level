<?php  
function connex($base,$param)
{


	include_once($param.".php");
	$idCon=mysql_connect(MYHOST,MYUSER,MYPASS);
	$rqt = "CREATE DATABASE IF NOT EXISTS accueil";
	$req="CREATE TABLE IF NOT EXISTS inscription (
			id int(11) NOT NULL AUTO_INCREMENT,
			firstName varchar(100) COLLATE utf8_bin NOT NULL default '',
			lastName varchar(100) COLLATE utf8_bin NOT NULL default '',
			email varchar(255) COLLATE utf8_bin NOT NULL default '',
			password varchar(255) COLLATE utf8_bin NOT NULL default '',
			gender varchar(100) COLLATE utf8_bin NOT NULL default '',
			day varchar(100) COLLATE utf8_bin NOT NULL default '',
			month varchar(100) COLLATE utf8_bin NOT NULL default '',
			year varchar(100) COLLATE utf8_bin NOT NULL default '',
			level varchar(10) COLLATE utf8_bin NOT NULL default 'A1',
			score float(11) NOT NULL default 0,
			reading float(11) NOT NULL default 0,
			listening float(11) NOT NULL default 0,
			grammar float(11) NOT NULL default 0,
			dictation float(11) NOT NULL default 0,
			PRIMARY KEY  (id) )";
	if($idCon)
	{
		mysql_query($rqt, $idCon);
		$idbase=mysql_select_db($base);
		if(!$idbase)
		{
			die("impossible de se conncter à la base");
		}
		else mysql_query($req, $idCon);
	}
	else
	{
		die("impossible de se connecter au serveur de base de donner");
	}
	return($idCon);
}
?>