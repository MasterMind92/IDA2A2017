<?php 


	class Evaluation 
		{
			private static $idEv; 
			private static $libEleva;
						
			function __construct(array $tab)
			{
				$this->hydra($tab);
			}
				function setIdEv($idEv)
				  {
					$this->$idEv=$idEv;
				  }
				function setLibEleva($)
				  {
					$this->$libEleva=$libEleva;
				  }
			
				function getIdEv()
					{
						return $this->$idEv;
					}
				function getLibEleva()
					{
						return $this->$libEleva;
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