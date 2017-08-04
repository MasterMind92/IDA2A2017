<?php 

	require_once "../Model/CentreExamen.php";

	class ControlCentex
	{
		$rep=0;
		private static $conx=null;
		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}
		public function add_cenxan(CentreExamen $a)
		
		{
			$t="INSERT INTO centreExamen(idVist,nomCent) VALUES('$a->getIdVist()','$a->getNomCent()')";
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
  public function mod_cenxam($idVist,$nomCent)
 	{
 		$C="UPDATE centreExamen SET idVist='$idVist', nomCent='$nomCent'";
 		$exe=$this->$conx->querey($C);
			if ($exe) 
				{
					$rip=1;
				}
				 else
				 {
					$rip=0;
				}
				return $rip;
			
 	}

 	public function sup_cenxan($idVist,$nomCent)
 	{
 		$CE="DELETE FROM centreExamen WHERE idVist='idVis', idVist='$nomCent'";
 		$exe=$this->$conx->querey($CE);
			if ($exe) 
				{
					$rp=1;
				}
				 else
				 {
					$rp=0;
				}
				return $rp;
			
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