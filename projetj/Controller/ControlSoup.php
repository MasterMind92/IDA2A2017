<?php 
	require_once( '../Model/SousPrefecture.php');
	
	class ControlSoup
	{
		private static $rep=0;
		private static $rp=0;
	    private static $rip=0;
		private static $conx=null;
		
		function __construct()
		{
			self::$conx=Connexion::getConnexion();
		}
			public function add_sop(SousPrefecture $sp)
			 {
				$s="INSERT INTO sousPrefecture(idDp,libSP) VALUES('$sp->getIdDp()','$sp->getLibSP()')";
				$exe=self::$conx->query($s);

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
			public function mod_sop($idDp,$libSP)
			 {
			 	$mo="UPDATE sousPrefecture set idDp=$idDp,libSP='$libSP' ";
			 	$ts=self::$conx->query($mo);
			 	if ($ts)
			 	 {
			 		$rp=1;
			 	}
			 	 else 
			 	 {
			 		$rp=0;
			 	}
			 	return $rp;			 	
			 }
			public function sup_sop($idDp,$libSP)
			{
				$sp="DELETE FROM sousPrefecture WHERE idDp=$idDp,libSP='$libSP'";
				$ts=self::$conx->query($sp);
				if ($ts)
				 {
					$rip=1;
				} 
				else 
				{
					$rip=0;
				}
				return $rip;				
			}
	public function getsousP()
		{
			$A="SELECT * from sousprefecture";
			$exe=self::$conx->query($A);
			$table=array();
			while ($rep=$exe->fetch())
			{
			 	$table[]=$rep;							
			 }
			return $table;			
		}
	}
 ?>