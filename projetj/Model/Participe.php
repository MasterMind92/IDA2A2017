<?php 


	class Participe
		{
			private $idParti; 
			private $idDe;
			private $idFor;
			private $dateDebut;
			private $dateFin ;
			private $statuForm;
			
			
			function __construct(array $tab)
			{
				$this->hydra($tab);
			}
				function setIdParti($idParti)
				  {
					$this->idParti=$idParti;
				  }
				function setIdDe($idDe)
				  {
					$this->idDe=$idDe;
				  }
				function setIdFor($idFor)
				  {
					$this->idFor=$idFor;
				  }
				function setDateDebut($dateDebut)
				  {
					$this->dateDebut=$dateDebut;
				  }
				function setDateFin($dateFin)
				  {
					$this->dateFin =$dateFin;
				  }
				function setStatuForm($statuForm)
				  {
					$this->statuForm=$statuForm;
				  }
				function getIdParti()
					{
						return $this->idParti;
					}
				function getIdDe()
					{
						return $this->idDe;
					}
				function getIdFor()
					{
						return $this->idFor;
					}
				function getDateDebut()
					{
						return $this->dateDebut;
					}
				function getDateFin()
					{
						return $this->dateFin;
					}
				function getStatuForm()
					{
						return $this->statuForm;
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