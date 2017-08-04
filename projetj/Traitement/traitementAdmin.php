<?php 
require_once '../connexion/Connexion.php';
require_once '../Controller/ControlAdmin.php';
$ad=new ControlAdmin();
#var_dump($ad);
$admin=new Administrateur(array(
	'nomadmin'=>$_POST['noma'],
	'prenadmin'=>$_POST['prena'],
	'login'=>$_POST['log'],
	'mdpad'=>$_POST['mpdad']
	));
//echo json_encode(1);
print_r($ad->add_admin($admin));
 ?>