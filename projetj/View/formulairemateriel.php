<?php 
require_once '../connexion/Connexion.php';
require_once '../Controller/ControlFor.php';
require_once '../Controller/ControlTypemat.php';
$typeMat = new ControlTypemat();
$list = $typeMat->affichetout();
$matype= new ControlFor();
$liste=$matype->getMaty(); 
#var_dump($list);
#exit();
 ?>

<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initialscale=1.0">
 <meta charset="utf-8">
	<title>Matériel</title>
	<style type="text/css">
			
			input[type="submit"]{
				width: 100%;
			}
		</style>
</head>
<body>
	

    <div  class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">
   <form class="form-group well" action="../Traitement/TraitMateriel.php" method="POST" role="form" id="frmdemander">
   	<legend class="text-center"><h1>Enregistrement du Matériel</h1></legend>
   	<div class="form-group">
   		<label for="noMat">Libellé de la formation:</label>		   
 <input id="noMat" type="text" class="form-control" placeholder="Libellé de la formation..." name="noMat" autofocus> 
 <label for="noMat">Libellé du Matériel :</label>       
 <input id="noMat" type="text" class="form-control" placeholder="Libellé du Matériel..." name="noMat" autofocus> 
   	<label for="">TYPE FORMATION</label>

        <select name="" id="mat" class="form-control" name="mat" required="">
          <option value="">----------</option>
          <?php foreach ($liste as $key => $value):?>
            <option value="<?php echo $value['idFor']; ?>"><?php echo $value['libFor'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div>
        <label for="">TYPE MATERIEL</label>
   
        <input type="text" name="typeMat" id="typeMat" class="form-control" value="" disabled />
      </div>
<button class="btn btn-primary" name="ok" type="submit"><span class="glyphicon glyphicon-ok-sign" style="color:#4f4;"></span> Envoyer</button> 

    </div>
    
        <div class="alert alert-block alert-danger" style="display:none">     
    <h4>Erreur !</h4>     
     Vous devez entrer au moins 3 caractères !     </div>  </form>
     </div>
      
     <script type="text/javascript" src="../bootstrap/dist/js/jquery.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap-notify.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/script.js"></script>
      <script src="../bootstrap/js/jquery.js"></script> <script>  $(function(){    $("form").on("submit", function() {      if($("input").val().length < 3) {        $("div.form-group").addClass("has-error");        $("div.alert").show("slow").delay(4000).hide("slow");        return false;      }    });  
        $("#mat").on("change",function () {
              var idMat= $(this).val(); 

              $.post("../traitement/traitementType.php", {
                idMat: idMat}, function (data) {
                  //console.log(data);
                  //alert(data);
                  $("#typeMat").attr("value",data);
                });
             });
    });
        </script>
</body>
</html>