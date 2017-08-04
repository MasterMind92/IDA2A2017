<?php 

	
	class Formation
	 {  
	 	private $idFor;
	 	private $libFor;
		
			function __construct(array $tab)
			 {
				$this->hydra($tab);
			 }

			 	function setIdFor($idFor)
				 {
					$this->idFor=$idFor;
				 }
				function setLibFor($libFor)
				 {
					$this->libFor=$libFor;
				 }
				function getIdFor()
				 {
					return $this->idFor;
				 }
				function getLibFor()
				 {
					return $this->libFor;
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
		public function getFor()
		{
			$A="SELECT * from formation";
			$exe=$this->conx->query($A);
			$table=array();
			while ($rep=$exe->fetch())
			 {
			 	$table[]=$rep;							
			 }
			 return $table;			
		}

	 }


 ?>