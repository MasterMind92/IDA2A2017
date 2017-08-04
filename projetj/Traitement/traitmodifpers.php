
<?php 
	require_once '../connexion/Connexion.php';
	require_once '../controller/ControlAuto.php';
	$modif= new ControlAuto();
	#var_dump($_POST);
	
	$id=trim($_POST['id']);
	$nom=trim($_POST['nom']);
	$prenom=trim($_POST['pre']);
	$dat=trim($_POST['date']);
	$domicil=trim($_POST['dom']);
	#var_dump($eco);

	$resulta=$modif-> mod_pers($id,$nom,$prenom,$dat,$domicil);
	echo $resulta;
	#echo json_encode(1);
	
 ?>