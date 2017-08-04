<?php 
require_once '../connexion/connexion.php';
require_once '../controller/ControlDemand.php';
if (isset($_POST) AND !empty($_POST)) {
	$control=new ControlDemand();
    $demandeur=new Demandeur(array(
       					'nomDe'=>$_POST['nom'],
       					 'preDe'=>$_POST['pre'],
       					 'datNai'=>$_POST['datnaiss'],
       					 'numpieceDe'=>$_POST['piece'],
       					 'domiDe'=>$_POST['domicil'],
       					 'profDe'=>$_POST['prof'],
       					 'contDe'=>$_POST['contact'],
       					 'email'=>$_POST['mail']
    	             ));
    $result= $control->addDemand($demandeur);
    if ($result) {
     echo json_encode(1);
   }
   else{
    echo json_encode(0);
   }
}
?>