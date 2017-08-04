<?php 
require_once '../connexion/Connexion.php';
require_once '../controller/ControlAuto.php';
$per= new ControlAuto();
$liste=$per->getauto();
 ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title> Personnel </title>
		<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
		<style type="text/css">
			
			input[type="submit"]{
				width: 100%;
			}
		</style>
		<link rel="script" type="Connexion" href="Connexion.php">
	</head>
	<body>
		<div id="1" class="col-lg-4 col-lg-offset-4  col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
    <form class="form-group well"  id="perso" method="POST" role="form">
      <legend class="text-center">Formulaire personnel</legend>

      <div class="form-group">
        <label for="auto">AUTO-ECOLE</label>
       <select name="auto" id="auto" class="form-control" required="required">
        <option value="">--------------</option>
          <?php foreach ($liste as  $value):?>
            <option value="<?=$value['idAuto']?>"><?=$value['libeAuto']?></option>
          <?php endforeach ?>
        </select>   
     </div> 
    
      <div class="form-group">
        <label for="nom">NOM:</label>
        <input type="text" class="form-control" name="nom" placeholder="ENTREZ LE NOM ICI">
      </div>

      <div class="form-group">
        <label for="prnpers">PRENOM:</label>
        <input type="text" class="form-control"  name="prnPers" placeholder="ENTREZ LE PRENOM ICI">
      </div>

      <div class="form-group">
        <label for="dtnaisspers">DATE DE NAISSANCE:</label>
        <input type="text" class="form-control" name="dtnaisspers" placeholder="ENTREZ LA DATE DE NAISSANCE ICI">
      </div>

      <div class="form-group">
        <label for="domipers">DOMICILE:</label>
        <input type="text" class="form-control"  name="domipers" placeholder="ENTREZ LE DOMICILE ICI">
      </div>

      <div class="form-group">
        <label for="profpers">PROFFESSION:</label>
        <input type="text" class="form-control"  name="profpers" placeholder="ENTREZ TA PROFFESSION ICI">
      </div>

      <div class="form-group">
        <label for="contPers">CONTACT:</label>
        <input type="text" class="form-control"  name="contpers" placeholder="ENTREZ LE CONTACT">
      </div>
      <div class="form-group">
        <label for="emailPers">EMAIL:</label>
        <input type="text" class="form-control"  name="emailpers" placeholder="ENTREZ LE EMAIL ICI">
      </div>
      <div class="form-group">
        <label for="login">LOGIN:</label>
        <input type="text" class="form-control"  name="login" placeholder="ENTREZ LE LOGIN ICI">
      </div>
      <div class="form-group">
        <label for="passe">MOT PASSE:</label>
        <input type="text" class="form-control"  name="passe" placeholder="ENTREZ LE MOT DE PASSE ICI">
      </div>    
     <button type="submit" class="btn btn-primary">VALIDEZ</button>
   </form>

		<script type="text/javascript" src="../bootstrap/dist/js/jquery.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap-notify.min.js"></script>
     <script type="text/javascript" src="../bootstrap/js/pers.js"></script>
	</body>
</html>