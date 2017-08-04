<?php 

	require_once "../Model/Faire.php";

	class ControLFai
	{
		private static $rep=0;
		private static $rp=0;
		private static $ep=0;
		private static $conx=null;
		
		function __construct()
		{
			self::conx=Connexion::getConnexion();
		}
		public function add_(Faire $fa)
		
		{
			$t="INSERT INTO faire(idFor,idPers) VALUES ('$fa->getIdFor()','$fa->getIdPers()')";
			$exe=self::$conx->query($t);
				if ($exe) 
				{
					$rep=1;
				}
				 else
				 {
					$rep=0;
				}
				return $rep;		
		}
	public function getMat()
		{
			$A="SELECT * from materielFormation";
			$exe=self::conx->query($A);
			$table=array();
			while ($rep=$exe->fetch())
			{
			 	$table[]=$rep;							
			 }
			return $table;			
		}
		
	}

 ?>