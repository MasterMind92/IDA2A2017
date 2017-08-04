
<?php 
	require_once '../connexion/Connexion.php';
	require_once '../controller/ControlPers.php';
	$modif= new ControlPers();
	#var_dump($_POST);
	
	$id=trim($_POST['id']);
	
	#var_dump($eco);

	$resulta=$modif->sup_pers($id);
	echo $resulta;
	#echo json_encode(1);
	
 ?>