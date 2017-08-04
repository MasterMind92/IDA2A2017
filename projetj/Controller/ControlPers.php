<?php 
	require_once "../Model/Personnel.php";

	class ControlPers
	{
		private $rep=0;
		private $rp=0;
	    private $rip=0;
		private static $conx=null;
		
		function __construct()
		{
			self::$conx=Connexion::getConnexion();
		}
    public function add_pers(Personnel $ps)
		
		{
			$rep=self::$conx->prepare("INSERT INTO personnel VALUES(?,?,?,?,?,?,?,?,?,?,now(),now())");
			$result=$rep->execute(array(
					$ps->getIdAuto(),
	 				$ps->getNomPers(),
	 				$ps->getPrePers(),
	 				$ps->getDatnaissPers(),
	 				$ps->getDomiPers(),
	 				$ps->getProfPers(),
	 				$ps->getContPers(),
	 				$ps->getEmailPers(),
	 				$ps->getLogin(),
	 				$ps->getMdpad()
	 			));	
			return $result;
	   			var_dump($result);
 					exit();		
		 }
	public function mod_pers($idAuto,$nonPers,$prnPers,$dtnaissPers,$domiPers,$profPers,$contPers,$emailPers)
		{
			$mo="UPDATE personnel SET idAuto=$idAuto,nonPers='$nonPers',prnPers='$prnPers',dtnaissPers=$dtnaissPers,domiPers='$domiPers',profPers='$profPers',contPers='$contPers',emailPers='$emailPers'";
			$exe=$this->conx->query($mo);
			if ($exe) {
				$rp=1;
			} else {
				$rp=0;
			}
			return $rp;			
		}
	public function sup_pers($idpers)
		{
			$sup="DELETE FROM personnel WHERE idPers=$idpers";
			$exe=$this->conx->query($sup);
			if ($exe) {
				$rip=1;
			} else {
				$rip=0;
			}
			return $rip;			
		}
	public function getMat()
		{
			$A="SELECT * from personnel";
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