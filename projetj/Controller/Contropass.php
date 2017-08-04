<?php 

	require_once "../Model/Passer.php";

	class ControlPass 
	{
		private static $rep=0;
		private static $rp=0;
	    private static $rip=0;
	    private static $conx=null;
		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}
		public function add_pass(Passer $p)
		
		{
			$t="INSERT INTO passer(idVist,idDe,datPse) VALUES ('$p->getIdVist()','$p->getIdDe()','$p->getDatPse()')";
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
			function mod_pass($idVist,$idDe,$datPse){
			$Pas="UPDATE passer SET idVist='$idVist',idDe='$idDe',datPse=$datPse";
			$rep=0;
			$exe=$this->$conx->query($Pas);
			if($exe){
				$rip=1;
			} else{
				$rip=-1;
			}
				return $rip;
		}
		function sup_pass($idVist,$idDe,$datPse){
			$supPas="DELETE FROM passer WHERE idVist='$idVist',idDe='$idDe',datPse=$datPse";
			$rep=0;
			$exe=$this->$conx->query($supPas);
			if($exe){
				$rp=1;
			} else{
				$rp=-1;
			}
				return $rp;
		}
	public function getMat()
		{
			$A="SELECT * from passer";
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