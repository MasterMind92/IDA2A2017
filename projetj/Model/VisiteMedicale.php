<?php 
	
	class VisiteMedicale
		{
			private $idVist;
			private $grpsan; 
			private $vus;
			private $datevisit;

			
			function __construct(array $tab)
			 {
				$this->hydra($tab);
			 }

			function sertIdVist($idVist)
			 	{
			 		$this->$idVist=$idVist;
			 	}
			function sertGrpsan($grpsan)
			 	{
			 		$this->$Grpsan=$Grpsan;
			 	}
			function sertVus($vus)
			 	{
			 		$this->$vus=$vus;
			 	}
			 function sertDatevisit($datevisit)
			 	{
			 		$this->$datevisit=$datevisit;
			 	}

			function getIdVist()
			 {
			   return $this->$idVist;
			 }
			function getGrpsan()
			 {
			   return $this->$grpsan;
			 }
			function getVus()
			 {
			   return $this->$vus;
			 }
			function getDatevisit()
			 {
			   return $this->$datevisit;
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