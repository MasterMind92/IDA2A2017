<?php 
require_once '../connexion/Connexion.php';
require_once '../Controller/ControlAdmin.php';
require_once '..Controller/ControlAuto.php';
$conx= new connexion();
$adminDeco = new ControlAdmin();
$autoDeco = new ControlAuto();
//$login = $_POST['login'];
//$pwd =$_POST['pass'];
$adminDeco->seDeLoguer();
$autoDeco->seDeLoguer();
 ?>