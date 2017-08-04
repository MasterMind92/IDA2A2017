<?php 
	
	require_once "../Model/Effectuer.php";
	
	class ControlEffect
	{
		private static $rep=0;
		private static $rp=0;
		private static $ep=0;
		private static $conx=null;
		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}

			public function add_efect(Effecture $e)
			{
				$r="INSERT INTO efecture1(idEv,idDe,dateEvalu,etatEf) VALUES('$e->getIdEv()','$e->getIdDe()','$e->getDateEvalu()','$e->getEtatEf()')";
				$exe=$this->$conx->query($r);
				
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
	 public function mod_effect($idEv,$idDe,$dateEvalu,$etatEf)
		{
			$Ef="update effecture set idEv='$idEv', idDe='$idEv', dateEvalu=$dateEvalu,
			etatEf='$etatEf'";
			$exe=$this->$conx->querey($Ef);				
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
	public function sup_effect($idEv,$idDe,$dateEvalu,$etatEf)
		{
			$Ef1="DELETE FROM effecture WHERE idvE='$idEv', idDe='$idDe', dateEvalu=$dateEvalu,
			etatEf='$etatEf' ";
			$exe=$this->$conx->querey($Ef1);
				
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
			$A="SELECT * from effecture";
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