<?php 

	class Demandeur
		{
			private $idDe; 
			private $nomDe;
			private $preDe;
			private $datNai;
			private $numpieceDe;
			private $domiDe;
			private $profDe;
			private $contDe;
			private $email;
			
			function __construct(array $tab)
			{
				$this->hydra($tab);
			}

    public function getIdDe()
    {
        return $this->idDe;
    }

    private function _setIdDe($idDe)
    {
        $this->idDe = $idDe;
        return $this;
    }

    public function getNomDe()
    {
        return $this->nomDe;
    }

    private function _setNomDe($nomDe)
    {
        $this->nomDe = $nomDe;
        return $this;
    }

    public function getPreDe()
    {
        return $this->preDe;
    }

    private function _setPreDe($preDe)
    {
        $this->preDe = $preDe;
        return $this;
    }

    public function getDatNai()
    {
        return $this->datNai;
    }

    private function _setDatNai($datNai)
    {
        $this->datNai = $datNai;
        return $this;
    }

    public function getNumpieceDe()
    {
        return $this->numpieceDe;
    }

    private function _setNumpieceDe($numpieceDe)
    {
        $this->numpieceDe = $numpieceDe;
        return $this;
    }

    public function getDomiDe()
    {
        return $this->domiDe;
    }

    private function _setDomiDe($domiDe)
    {
        $this->domiDe = $domiDe;
        return $this;
    }


    public function getProfDe()
    {
        return $this->profDe;
    }

    private function _setProfDe($profDe)
    {
        $this->profDe = $profDe;
        return $this;
    }

    public function getContDe()
    {
        return $this->contDe;
    }

    private function _setContDe($contDe)
    {
        $this->contDe = $contDe;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    private function _setEmail($email)
    {
        $this->email = $email;
        return $this;
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