
<?php 
	require_once '../connexion/Connexion.php';
	require_once '../controller/ControlAuto.php';
	$modif= new ControlAuto();
	#var_dump($_POST);
	
	$id=trim($_POST['id']);
	$nom=trim($_POST['nom']);
	$contact=trim($_POST['contact']);
	$domicil=trim($_POST['domicil']);
	$adress=trim($_POST['adress']);
	$mail=trim($_POST['mail']);
	#var_dump($eco);

	$resulta=$modif-> up_autoecole($id,$nom,$contact,$domicil,$adress,$mail);
	echo $resulta;
	#echo json_encode(1);
	
 ?>