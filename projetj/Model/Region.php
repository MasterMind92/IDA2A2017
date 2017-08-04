<?php 

	class Region
		{
			private $idRg;
			private $norg;
						
			function __construct(array $tab)
				{
					$this->hydra($tab);
				}

			function setIdRg($idRg)
				{
					$this->$$idRg=$idRg;
				}
			function setNorg($norg)
				{
					$this->$$norg=$norg;
				}

			function getIdRg()
			 {
			   return $this->$idRg;
			 }
			function getNorg()
			 {
			   return $this->$norg;
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