<?php 
require_once '../connexion/Connexion.php';
require_once '../Controller/ControlAdmin.php';
$admin= new ControlerAdmin();
$Auth= $admin->authentification($_POST['login'],$_POST['key']);
if ($Auth!= 0) {
	
}

 ?>