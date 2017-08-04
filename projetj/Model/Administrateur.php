<?php 


	class Administrateur
		{
			private $idad; 
			private $nomad;
			private $prenad;
			private $login;
			private $mdpad;
			
			function __construct(array $tab)
			{
				$this->hydra($tab);
			}
				function setIdad($idadmin)
				{
					$this->idad=$idad;
				}
				function setNomad($nomad)
				{
					$this->nomad=$nomad;
				}
				function setrPenad($prenad)
				{
					$this->prenad=$prenad;
				}
				function setLogin($login)
				{
					$this->login=$login;
				}
				function setMdpad($mdpad)
				{
					$this->mdpad=$mdpad;
				}
				function getIdad()
					{
						return $this->dad;
					}
				function getNomad()
					{
						return $this->nomad;
					}
				function getPenad()
					{
						return $this->penad;
					}
				function getLogin()
					{
						return $this->login;
					}
					function getMdpad()
					{
						return $this->mdpad;
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