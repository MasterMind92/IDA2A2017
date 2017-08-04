<?php  
	require_once "../Model/MaterielFormation.php";

	class ControlMatFor
	{
		private static $rep=0;
		private static $rp=0;
	    private static $rip=0;
	    private static $conx=null;
		
		function __construct()
		{
			self::$conx=Connexion::getConnexion();
		}
			public function add_mater(MaterielFormation $mt)
			  {
				$t="INSERT INTO materielFormation(idFor,noMat,tyMat) VALUES('$mt->getIdFor()','$mt->getNoMat()','$mt->getTyMat()')";
				$exe=$this->conx->query($t);

					if ($exe){
					  $rep=1;
					 }else{
					 $rep=0;
				    }
				    return $rep;
			  }
			  public function mod_mater($idFor,$noMat,$tyMat)
			  {
			  	$t="UPDATE materielFormation SET idFor=$idFor,noMat='noMat',tyMat='$tyMat'";
			  	$exe=$this->conx->query($t);
			  	if ($exe) {
			  		$rip=1;
			  	} else {
			  		$rip=0;
			  	}
			  	return $rip;			  	
			  }
     public function sup_mater($idFor,$noMat,$tyMat)
			  {
			  	$sup="DELETE FROM materielFormation WHERE idFor=$idFor,noMat='$noMat',tyMat='$tyMat'";
			  	$exe=$this->conx->query($sup);
			  	if ($exe) {
			  		$rp=1;
			  	} else {
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