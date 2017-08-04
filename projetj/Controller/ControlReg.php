<?php 
	
	require_once "../Model/Region.php";

	class ControlReg
	{
		private static $rep=0;
		private static $rp=0;
	    private static $rip=0;
		private static $conx=null;
		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}
			public function add_reg(Region $rg)
			 {
				$t="INSERT INTO region(norg) VALUES('$rg->getNorg()')";
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
			public function mod_reg($norg)
			{
				$ts="UPDATE region SET norg='$norg'";
				$tc=$this->$conx->query($ts);
				if ($tc)
				 {
					$rp=1;
				}
				 else 
				{
					$rp=0;
				}
				return $rp;				
			}
			public function sup_reg($norg)
			{
				
				$sp="DELETE FROM region WHERE norg='$norg'";
				$exe=$this->$conx->query($sp);
				if ($exe) {
					$rip=1;
				} else {
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