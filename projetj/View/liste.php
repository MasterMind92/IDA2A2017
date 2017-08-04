<?php 

$conex=new PDO("mysql:host=localhost;dbname=projet","root","");

 ?>


<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>  Liste des auto</title>

</head>
<body>
	<div id="forme">
<form action="#" method="post">
	<fieldset>
  <legend>
  	Liste des auto
  </legend>

  <table align="center" cellspacing="0" cellpadding="0" width="100%">
  	<tr bgcolor="white" align="center">
        <th><font color="black" size="4">Libellé</font></th>
        <th><font color="black" size="4">Contact</font></th>
        <th><font color="black" size="4">Situation geo</font></th>
        <th><font color="black" size="4">adresse</font></th>
        <th><font color="black" size="4">Email</font></th>
        
    </tr>
          <?php 
            $req=$conex->query("SELECT * FROM autoecole");
            while($affiche=$req->fetch()){ ?>
            <tr>
              <td><?php echo $affiche['libeAuto']; ?></td>
              <td><?php echo $affiche['contAuto']; ?></td>
              <td><?php echo $affiche['situgeo']; ?></td>
              <td><?php echo $affiche['adrs']; ?></td>
              <td><?php echo $affiche['emailAuto']; ?></td>
            </tr>
        
         <?php } ?>
          
  </table>

	</fieldset>


</form>
	</div>

</body>
</html>