<?php 
	require_once "../Model/VisiteMedicale";
	
	class ControlVisitM
	{
		 private static $rep=0;
		 private static $rp=0;
		 private static $rip=0;
		 private static $conx=null;
		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}

		public function add_vimd(VisiteMedicale $vi)
		 {
			$t="INSERT INTO visiteMedicale(grpsan,vus,datevi) VALUES('$vi->getGrpsan()','$vi->getVus()','$vi->getDatevi()')";
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
	public function mod_vimd($grpsan,$vus,$datevi)
		 {
		 	$mo="UPDATE visiteMedicale SET grpsan='$grpsan',vus='$vus',datevi=datevi";
		 	$test=$this->$conx->query($mo);
		 	if ($test) 
		 	{
		 		$rp=1;
		 	} 
		 	else
		 	 {
		 		$rp=0;
		 	}
		 	return $rp;		 	
		 }
		 public function sup_vimd($grpsan,$vus,$datevi)
		 {
		 	$td="DELETE FROM visiteMedicale WHERE grpsan='$grpsan',vus='$vus',datevi=$datevi";
		 	$te=$this->$conx->query($td);
		 	if ($te) 
		 	{
		 		$rip=1;
		 	} 
		 	else
		 	 {
		 		$rip=0;
		 	}
		 	return $rip;		 	
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