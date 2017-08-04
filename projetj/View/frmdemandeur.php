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
  </head>
  <body>
     <div  class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">
   <form class="form-group well" action="../traitement/expldemande.php" method="POST" role="form" id="frmdemander">
    <legend class="text-center"><h1>ENREGISTREMENT <br>DU DEMANDEUR</h1></legend>
   
    <div class="form-group">
      <label for="nom">NOM</label>
      <input type="text" class="form-control" id="nom" placeholder="votre nom ici" name="nom" autofocus>
      
    </div>
    <div class="form-group">
      <label for="nom">PRENOM</label>
      <input type="text" class="form-control" id="pre" placeholder="prenom ici" name="pre">
      
    </div>
    <div class="form-group">
      <label for="datnaiss">DATE DE NAISSANCE</label>
      <input type="date" class="form-control" id="datnaiss" placeholder="inserez votre date de NAISSANCE ici" name="datnaiss" >
      
    </div>
     <div class="form-group">
      <label for="piece">N°PIECE D'IDENTITE</label>
      <input type="text" class="form-control" id="piece" placeholder="N° piece ici" name="piece">
      
    </div>
    <div class="form-group">
      <label for="domicil">DOMICILE</label>
      <input type="text" class="form-control" id="domicil" placeholder="votre lieu d'habitaion ici" name="domicil">
      
    </div>
      <div class="form-group">
      <label for="prof">PROFESSION</label>
      <input type="text" class="form-control" id="prof" placeholder="votre PROFESSION" name="prof">
      
    </div>
    <div class="form-group">
      <label for="contact">CONTACTS</label>
      <input type="tel" class="form-control" id="contact" placeholder="vos contacts ici" name="contact">
      
    </div>
    <div class="form-group">
      <label for="mail">ADRESSE ELECTRONIQUE</label>
      <input type="email" class="form-control" id="datnaiss" placeholder="votre email ici" name="mail" required>
      
    </div>
    
   
    <button type="submit" class="btn btn-primary">VALIDEZ</button><button type="reset" class="btn btn-primary annuler">ANNULEZ</button>
   </form>
    </div>
   
     <script type="text/javascript" src="../bootstrap/dist/js/jquery.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="../bootstrap/dist/js/bootstrap-notify.min.js"></script>
     <script type="text/javascript" src="../bootstrap/dist/js/script.js"></script>
  </body>
</html>