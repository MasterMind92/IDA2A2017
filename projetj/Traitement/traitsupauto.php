
<?php 
	require_once '../connexion/Connexion.php';
	require_once '../controller/ControlAuto.php';
	$modif= new ControlAuto();
	#var_dump($_POST);
	
	$id=trim($_POST['id']);
	
	#var_dump($eco);

	$resulta=$modif->sup_auto($id);
	echo $resulta;
	#echo json_encode(1);
	
 ?>