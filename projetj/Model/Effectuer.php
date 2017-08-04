<?php 
	
	class Effectuer
		{
			private static $idEffect;
			private static $idEv;
			private static $idDe;
			private static $dateEvalu;
			private static $etatEf;


			function __construct(array $tab)
				{
					$this->hydra($tab);
				}

			function setIdEffect($idEffect)
				{
			  	    $this->$idEffect=$idEffect;
				}
			function setIdEv($idEv)
				{
			  	    $this->$idEv=$idEv;
				}
			function setIdDe($idDe)
				{
			  	    $this->$idDe=$idDe;
				}
			function setDateEvalu($dateEvalu)
				{
			  	    $this->$dateEvalu=$dateEvalu;
				}
			function setEtatEf($etatEf)
				{
			  	    $this->$etatEf=$etatEf;
				}
			function getIdEffect()
				{
			  		return $this->$idEffect;
				}
			function getIdEv()
				{
			  		return $this->$idEv;
				}
			function getIdDe()
				{
			  		return $this->$idDe;
				}
			function getDateEvalu()
				{
			  		return $this->$dateEvalu;
				}
			function getEtatEf()
				{
			  		return $this->$etatEf;
				}


		 public function hydra(array $ntab)
				 {
					 foreach ($ntab as $key => $value) 
					 {
						 $method="set".ucfirst($key);
						 if (method_exists($this, $method)) 
						 {
							 $this->$method($value);
						 }
					 }
				 }
		}
?>