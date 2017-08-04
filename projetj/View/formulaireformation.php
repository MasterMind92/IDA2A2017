<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initialscale=1.0">
 <meta charset="utf-8">
	<title>Formation</title>
	<style type="text/css">
			
			input[type="submit"]{
				width: 100%;
			}
		</style>
</head>
<body>
	

    <div  class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">
   <form class="form-inline well" action="../Traitement/TraitFormation.php" method="POST" role="form" id="frmdemander">
   	<legend class="text-center"><h1>Enregistrement de la formation</h1></legend>
   	<div class="form-group">
   		<label for="libfor">Libellé:</label>		   
 <input id="libfor" type="text" class="form-control" placeholder="Libellé de la formation..." name="libfor" autofocus> 
   	</div>
    
   <button class="btn btn-primary" name="ok" type="submit"><span class="glyphicon glyphicon-ok-sign" style="color:#4f4;"></span> Envoyer</button> 
     <div class="alert alert-block alert-danger" style="display:none">     
    <h4>Erreur !</h4>     
     Vous devez entrer au moins 4 caractères !     </div>  </form>
     </div>
      
     <script type="text/javascript" src="../bootstrap/dist/js/jquery.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap-notify.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/script.js"></script>
      <script src="../bootstrap/js/jquery.js"></script> <script>  $(function(){    $("form").on("submit", function() {      if($("input").val().length < 4) {        $("div.form-group").addClass("has-error");        $("div.alert").show("slow").delay(4000).hide("slow");        return false;      }    });  });
        </script>
</body>
</html>