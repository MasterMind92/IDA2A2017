<?php 

	require_once "../Model/Evaluation";

	class ControlEval
	{
		private static $rep=0;
		private static $rp=0;
		private static $ep=0;
		private static $conx=null;
		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}
		public function add_eval(Evaluation $ev)
		
		{
			$t="INSERT INTO evaluation(libEleva) VALUES ('$ev->getLibEleva()')";
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
     public function getMat()
		{
			$A="SELECT * from materielFormation";
			$exe=$this->conx->query($A);
			$table=array();
			while ($rep=$exe->fetch())
			{
			 	$table[]=$rep;							
			 }
			return $table;			
		}
	}

 ?>