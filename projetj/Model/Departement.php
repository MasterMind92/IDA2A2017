<?php 

	
	class Departement
	{
		private  $idDepart;
		private  $libedp;
		private  $idReg;
		
		function __construct(array $tab)
		{
			$this->hydra($tab);
		}

		function setIdDepart($idDepart)
			{
				$this->idDepart=$idDepart;
			}
		function setLibedp($libedp)
			{
				$this->libedp=$libedp;
			}
		function setIdReg($idReg)
			{
				$this->idReg=$idReg;
			}

		function getIdDepart()
			{
				return $this->idDepart;
			}
		function getLibedp()
			{
				return $this->libedp;
			}
		function getIdReg()
			{
				return $this->idReg;
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