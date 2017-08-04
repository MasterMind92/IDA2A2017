<?php 

class TypeMat
{
	private $idtype;
	private $libtype;
	
	function __construct(array $tab)
	{
		$this->hydra($tab);
	}

    public function getIdtype()
    {
        return $this->idtype;
    }

 
    private function _setIdtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }

    public function getLibtype()
    {
        return $this->libtype;
    }

    private function _setLibtype($libtype)
    {
        $this->libtype = $libtype;

        return $this;
    }
    public function hydra(array $tab)
    {
    	foreach ($tab as $key => $value) {
    		$method='_set'.ucfirst($key);
    		if (method_exists($this,$method)) {
    			$this->$method($value);
    			
    		}
    	}
    }
}




 ?>