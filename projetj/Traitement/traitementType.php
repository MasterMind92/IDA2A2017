<?php 
 require_once '../connexion/Connexion.php';
 require_once '../controller/Controltypemat.php';
 $typmat = new ControlTypemat();

 $mat = $typmat->affich((int)$_POST['idMat']);
 echo $mat[0]['libtype'];


 ?>