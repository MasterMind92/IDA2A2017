<?php 
	require_once "../Model/Demandeur.php";

	class ControlDemand
	{
		private  $rep=0;
		private  $rp=0;
	    private  $rip=0;
	   		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}

     public function addDemand(Demandeur $d)
      {
	   	$rep=$this->conx->prepare("INSERT INTO demandeur VALUES(null,?,?,?,?,?,?,?,?,now(),now())");
	   	$result=$rep->execute(array(
	              $d->getNomDe(),
	              $d->getPreDe(),
	              $d->getDatNai(),
	              $d->getNumpieceDe(),
	              $d->getDomiDe(),
	              $d->getProfDe(),
	              $d->getContDe(),
	              $d->getEmail()
	   		));	
	   	return $result;
      }
   function mod_demd($nomDe,$penDe,$datNai,$npicDe,$donic,$prfDe,$contDe,$email,$em)
     {
     	$moDe="UPDATE demandeur SET nomDe='$nomDe',penDe='$penDe',datNai='$datNai' WHERE email='$em',
		npicDe='$npicDe',donic='$donic',prfDe='$prfDe',
		contDe='$contDe',email='$email'";
			$tex=$this->conx->query($moDe);
			if($exe){
				$rp=1;
			} 
			else{
				$rp=0;
			}
			return $rp;     
	  }
	  public function sel_email($idDe)
		{
			$lo="SELECT email FROM demandeur WHERE idDe=$idDe";
			$exe=$this->conx->query($lo);
			$ro=$exe->fetch(PDO::FETCH_ASSOC);
			return $ro;
		}
	 function sup_demd($nomDe,$penDe,$datNai,$npicDe,$donic,$prfDe,$contDe,$email)
	 {		  
	 $supDe="DELETE FROM demandeur WHERE nomDe='$nomDe',penDe='$penDe',datNai=$datNai,
		npicDe='$npicDe',donic='$donic',prfDe='$prfDe',
		contDe='$contDe',email='$email'";
			$exe=$this->$conx->query($supDe);
			if($exe){
				$rip=1;
			} 
			else{
				$rip=0;
			}
		return $rip;		
	  }
	  public function listdemand()
		{
			$A="SELECT * FROM demandeur";
			$exe=$this->conx->query($A);
			$table=array();
			while ($ro=$exe->fetch(PDO::FETCH_ASSOC))
			{
			 	$table[]=new Demandeur($ro);							
			}
			return $table;			
		}

	}

 ?>