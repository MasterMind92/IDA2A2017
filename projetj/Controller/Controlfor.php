<?php 

	require_once "../Model/Formation.php";

	class ControlFor
	{
		private  $rep=0;
		private  $rp=0;
		private  $ep=0;
		private static $conx=null;
		
		function __construct()
		{
			self::$conx=Connexion::getConnexion();
		}
		public function add_form(Formation $f)
		
		{
			$t="INSERT INTO formation(libFor) VALUES ('$f->getLibfor()')";
			$exe=$this->$conx->query($t);
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
	public function getMaty()
		{
			$A="SELECT * from formation";
			$exe=self::$conx->query($A);
			$table=array();
			while ($rep=$exe->fetch(PDO::FETCH_ASSOC))
			{
			 	$table[]=$rep;							
			 }
			return $table;			
		}
	}

 ?>