<?php 
$conex=new PDO("mysql:host=localhost;dbname=projet","root","");



for ($i=0; $i <=5 ; $i++) { 
	$result=$conex->query("insert into autoecole(idSp,libeAuto,contAuto,situgeo,adrs,emauto) values(1,'jere','05/02','cocody','02bp','jre@gmail.com')" );

}


	var_dump($result);

 ?>