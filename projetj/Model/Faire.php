<?php 
	/**
	* 
	*/
	class Faire
	{
		private $idFai;
		private $idFor;
		private $idPers;
		function __construct($tab)
		{
			$this->hydra($tab);
		}
			function setIdFai($idFai)
				{
					$this->$idFai=$idFai;
				}
			function setIdFor($idFor) 
				{
					$this->$idfor=$idfor;
				}
			function setIdPers($idPers) 
				{
					$this->$idPers=$idPers;
				}

			function getIdfai()
				{
					return $this->$idFai;
				}
			function getIdFor()
				{
					return $this->$idFor;
				}
			function getIdPers()
				{
					return $this->$idPers;
				}

			public function hydra( array $ntab)
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