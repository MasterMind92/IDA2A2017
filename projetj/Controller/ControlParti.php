<?php 

	require_once "../Model/Participe.php";

	class ControlParti
	{
		private static $rep=0;
		private static $rp=0;
		private static $ep=0;		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}
		public function add_parti(Participe $a)
		
		{
			$t="INSERT INTO participe(idDe,idFor,dateDebut,dateFin,statuForm) VALUES('$a->getIdDe()'),'$a->getIdFor()'),'$a->getDateDebut()'),'$a->getDateFin()'),'$a->getStatuForm()')";

			$exe=$this->conx->query($t);
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