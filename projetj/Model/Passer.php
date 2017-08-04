<?php 


	class passer
		{
			private $idPas; 
			private $idVist;
			private $idDe;
			private $datPse;
						
			function __construct(array $tab)
			{
				$this->hydra($tab);
			}
				function setIdPas($idPas)
				  {
					$this->$idPas=$idPas;
				  }
				function setIdVist($idVist)
				  {
					$this->$idVist=$idVist;
				  }
				function setIdDe($idDe)
				  {
					$this->$idDe=$idDe;
				  }
				function setDatPse($datPse)
				  {
					$this->$datPse=$datPse;
				  }
				
				function getIdPas()
					{
						return $this->$idPas;
					}
				function getIdVist()
					{
						return $this->$idVist;
					}
				function getIdDe()
					{
						return $this->$idDe;
					}
				function getDatPse()
					{
						return $this->$datPse;
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