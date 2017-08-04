<?php 
require_once '../connexion/Connexion.php';
require_once '../Controller/ControlAdmin.php';
require_once '../Controller/ControlAuto.php';
$conx = new Connexion();
$autoConnect = new ControlAuto();
$adminConect = new ControlAdmin();
$login = $_POST['login'];
$pwd = $_POST['pass'];
$result = $adminConect->authentification($login,$pwd);
$resultat = $autoConnect->authentification($login,$pwd);
$decon = $adminConect->seDeLoguer();
var_dump($result);

if ($result==true) {
  	header("location:../View/ad/pages/admin.php");
  	//echo "<b>Administrateur</b> ". $login;
  }
  elseif ($resultat ==true) {
  	header("location:../View/ad/pages/auto.php");
  	//echo "<b>Autoecole</b> ". $login;
  }
  else{
  	header("location:../View/markette.php");
  	//echo "<font color=\"red\">erreur veuillez reessayer</font>";
  }
 //var_dump($result);
 ?>