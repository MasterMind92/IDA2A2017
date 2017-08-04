<?php 
   require_once '../connexion/Connexion.php';
   require_once '../Controller/ControlProfil.php';
   require_once '../Controller/ControlAuto.php';
   $autoecole = new ControlAuto();
   $listeA = $autoecole->getAuto();
  $profil = new ControlProfil();
  $liste = $profil->getProfil();
 # var_dump($liste); exit();
 ?>
<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initialscale=1.0">
 <meta charset="utf-8">
	<title>Administrateur</title>
	<style type="text/css">
			
			input[type="submit"]{
				width: 100%;
			}
		</style>
</head>
<body>
	

    <div  class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">
   <form class="form-group well form-group-default form-group-static-top  " action="../Traitement/TraitAdmin.php" method="POST" role="form" id="frmdemander">
   	<legend class="text-center"><h1>Enregistrement de l'Administrateur</h1></legend>
   	<div class="form-group">
   		<label for="nomadmin">NOM</label>		   
 <input id="nomadmin" type="text" class="form-control" placeholder="Nom de l'admin..." name="nomadmin" autofocus> 
   	<label for="prenadmin">PRÉNOM</label>      
 <input id="prenadmin" type="text" class="form-control" placeholder="Prenom de l'admin..." name="prenadmin" autofocus> 
<label for="autoecole">AUTO-ECOLE</label>
  <select name="autoecole" id="autoecole" class="form-control" required="required">
    <option value="">--------------</option>
          <?php foreach ($listeA as  $value):?>
            <option value="<?=$value['idAuto']?>"><?=$value['libeAuto']?></option>
          <?php endforeach ?>
  </select>
   <label for="profil">PROFIL</label>
  <select name="profil" id="inputProf" class="form-control" required="required">
    <option value="">--------------</option>
          <?php foreach ($liste as  $value):?>
            <option value="<?=$value['idprofil']?>"><?=$value['libprofil']?></option>
          <?php endforeach ?>
  </select>
 <label for="login">EMAIL:</label>       
 <input id="login" type="text" class="form-control" placeholder="Login..." name="login" autofocus> 
    <label for="mpdad">MOT DE PASSE:</label>      
 <input id="mpdad" type="password" class="form-control" placeholder="Votre mot de passe..." name="mpdad" autofocus> 

    
<button class="btn btn-primary" name="ok" type="submit"><span class="glyphicon glyphicon-ok-sign" style="color:#4f4;"></span> Enregistrer</button> 

    </div>
    
        <div class="alert alert-block alert-danger" style="display:none">     
    <h4>Erreur !</h4>     
     Vous devez entrer au moins 3 caractères !     </div>  </form>
     </div>
      
     <script type="text/javascript" src="../bootstrap/dist/js/jquery.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap-notify.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/script.js"></script>
      <script src="../bootstrap/js/jquery.js"></script> <script>  $(function(){    $("form").on("submit", function() {      if($("input").val().length < 3) {        $("div.form-group").addClass("has-error");        $("div.alert").show("slow").delay(4000).hide("slow");        return false;      }    });  });
        </script>
</body>
</html>