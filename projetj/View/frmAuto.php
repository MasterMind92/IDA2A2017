<?php 
require_once '../connexion/Connexion.php';
#require_once '../Traitement/traitementAuto.php';
require_once '../Controller/ControlSoup.php';
$cont= new ControlSoup();
//var_dump($cont->getsousP());
//exit;
$liste=$cont->getsousP();
 ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title> Formulaire </title>
		<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
		<style type="text/css">
			
			input[type="submit"]{
				width: 100%;
			}
		</style>
	<link rel="script" type="Connexion" href="Connexion.php">
	</head>
	<body>
	
		 <div  class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">
   <form action="../Traitement/traitementAuto.php" class="form-group well" id="autoecole" method="POST" role="form">
   	<legend class="text-center"><h1>ENREGISTREMENT <br>DE L'AUTO-ECOLE</h1></legend>
   
   	<div class="form-group">
   		<label for="nom">NOM DE L'AUTO-ECOLE</label>
   		<input type="text" class="form-control" id="nom" placeholder="votre nom ici" name="nom" autofocus>
   	</div>
    <div class="form-group">
      <label for="contact">CONTACTS</label>
      <input type="text" class="form-control" id="contact" placeholder="vos contacts ici" name="contact">
      
    </div>	
   	<div class="form-group">
   		<label for="domicil">SITUATION GEOGRAPHIQUE</label>
   		<input type="text" class="form-control" id="domicil" placeholder="votre lieu d'habitaion ici" name="domicil">
   	</div>
    <div class="form-group">
      <label for="adress">ADRESSE DE L'AUTO-ECOLE</label>
      <input type="text" class="form-control" id="adress" placeholder="" name="adress" >
    </div>
   	<div class="form-group">
   		<label for="mail">E-mail</label>
   		<input type="email" class="form-control" id="mail" placeholder="votre email ici" name="mail" required>
   		
   	</div>
   		<div class="form-group">
   		<label for="souspref">SOUS-PREFECTURE</label>
      <select name="souspref" id="souspref" class="form-control" required="required">       
        <option value="">--------------</option>
        <?php foreach ($liste as  $value):?>
          <option value="<?=$value['idSp']?>"><?=$value['libSP']?></option>
        <?php endforeach ?>
      </select>   
   	</div> 
   <a class="btn btn-primary" data-toggle="modal" href='#admin'>VALIDEZ</a>
   <button type="reset" class="annuler"></button>
    <div class="modal fade" id="admin">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
           Insertion réussie. Voulez vous continuez à inserer?
          </div>
          <div class="modal-footer">
            <button type="button"  class="btn btn-default" data-dismiss="modal">OUI</button>
            <button id="accueil" type="button" class="btn btn-primary">NON</button>
          </div>
        </div>
      </div>
    </div>
   </form>
    </div>   
     <script type="text/javascript" src="../bootstrap/dist/js/jquery.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap-notify.min.js"></script>
     <script type="text/javascript" src="../bootstrap/js/autoecole.js"></script>
	</body>
</html>