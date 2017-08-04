<?php 
	
	class SousPrefecture
	{
		private $idSp;
		private $idDp;
		private $libSP;
		
		function __construct(array $tab)
		{
			$this->hydra($tab);
		}

		function setIdSp($idSp)
		{
			$this->$idSp=$idSp;
		}
		function setIdDp($idDp)
		{
			$this->$idDp=$idDp;
		}
		function setLibSP($libSP)
		{
			$this->$libSP=$libSP;
		}

			function getIdSp()
			{
				return $this->$idSp;
			}
			function getIdDp()
			{
				return $this->$idDp;
			}
			function getLibSP()
			{
				return $this->$libSP;
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