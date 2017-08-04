<?php 
require_once '../connexion/Connexion.php';
require_once '../Controller/ControlPers.php';
$pers= new ControlPers();
#var_dump($_POST);
#var_dump($pers);
$per=new Personnel(array(
	'idAuto'=>$_POST['auto'],
	'nomPers'=>$_POST['nom'],
	'prePers'=>$_POST['prnPers'],
	'datnaissPers'=>$_POST['dtnaisspers'],
	'domiPers'=>$_POST['domipers'],
	'profPers'=>$_POST['profpers'],
	'contPers'=>$_POST['contpers'],
	'emailPers'=>$_POST['emailpers'],
	'login'=>$_POST['login'],
	'mdpad'=>$_POST['passe']
	));
#var_dump($per);
 #exit();
	$res=$pers->add_pers($per);

	echo json_encode(1);
	#print_r($per->getNonPers());

 ?>