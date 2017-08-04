
<?php 
	require_once '../connexion/Connexion.php';
	require_once '../controller/ControlAuto.php';
	$auto= new ControlAuto();
	#var_dump($_POST);
	$ecole=new AutoEcole(array(		
		'libeAuto'=>$_POST['nom'],
		'contAuto'=>$_POST['contact'],
		'situgeo'=>$_POST['domicil'],
		'adrs'=>$_POST['adress'],
		'emailAuto'=>$_POST['mail'],
		'idSp'=>$_POST['souspref'],
		'idadmin'=>1
		));
	//var_dump($ecole->getIdSp());
	$auto->add_auto($ecole);
	echo json_encode(1);
 ?>