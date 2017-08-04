<?php 


	class CentreExamen
		{
			private $idCent; 
			private $idVist;
			private $nomCent;					
			
			function __construct(array $tab)
			{
				$this->hydra($tab);
			}
				function setIdCent($idCent)
				  {
					$this->$idCent=$idCent;
				  }
				function setIdVist($idVist)
				  {
					$this->$idVist=$idVist;
				  }
				function setNomCent($nomCent)
				  {
					$this->$nomCent=$nomCent;
				  }								
				function getIdCent()
					{
						return $this->$idCent;
					}
				function getIdVist()
					{
						return $this->$idVist;
					}
				function getNomCent()
					{
						return $this->$nomCent;
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