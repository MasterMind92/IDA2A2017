<?php
	require_once "../Model/Departement.php";
	
	class ControlDepart
	{
		private static $rep=0;
		private static $rp=0;
		private static $ep=0;
		private static $conx=null;
		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}

	public function add_depart(Departement $d)
			{
	      $con="INSERT INTO departement(libedp,idRg) VALUES('$d->getLibedp()','$d->getIdRg()')";
			$exe=$this->$conx->query->($con);
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
	public function mod_depart($libedp,$idRg)
			{
				$rep=0;
				$moDepart="UPDATE departement SET libedp='$libedp',idRg='$idRg'";
				$exe=$this->$conx->query($moDepart);
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
	public function sup_depart($libedp,$idRg)
			{
				$rep=0;
	     $supDepart="DELETE from departement WHERE libedp='$libedp',idRg=$idRg";
			$exe=$this->$conx->query($supDepart);
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