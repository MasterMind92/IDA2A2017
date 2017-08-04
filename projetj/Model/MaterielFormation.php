<?php

class MaterielFormation
	{
	private $idMat;
	private $idFor;
	private $noMat;
	private $tyMat;

	function __construct(array $tab)
		{
		  $this->hydra($tab);
		}

		function setIdMat($idMat)
			{
			  $this->$idMat=$idMat;
			}
		function setIdFor($idFor)
			{
			  $this->$idFor=$idFor;
			}
		function setNoMat($noMat)
			{
			  $this->$noMat=$noMat;
			}
		function setTyMat($tyMat)
			{
			  $this->$tyMat=$tyMat;
			}

		function getIdMat()
			{
			  return $this->$idMat;
			}
		function getIdFor()
			{
			  return $this->$idFor;
			}
		function getNoMat()
			{
			  return $this->$NoMat;
			}
		function getTyMat()
			{
			  return $this->$TyMat;
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