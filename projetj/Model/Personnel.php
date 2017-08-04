<?php  
	
	class Personnel
		{
			private $idPers; 
	        private $idAuto; 
	        private $nomPers; 
	        private $prePers; 
	        private $datnaissPers; 
	        private $domiPers;
	        private $profPers;
	        private $contPers;
	        private $emailPers;
	        private $login;
            private $mdpad;
			
			function __construct(array $tab)
				{
				  $this->hydra($tab);
				}

    public function getIdPers()
    {
        return $this->idPers;
    }
    private function _setIdPers($idPers)
    {
        $this->idPers = $idPers;

        return $this;
    }

    public function getIdAuto()
    {
        return $this->idAuto;
    }
    private function _setIdAuto($idAuto)
    {
        $this->idAuto = $idAuto;

        return $this;
    }

    public function getNomPers()
    {
        return $this->nomPers;
    }

    private function _setNomPers($nomPers)
    {
        $this->nomPers = $nomPers;

        return $this;
    }
    public function getPrePers()
    {
        return $this->prePers;
    }

    private function _setPrePers($prePers)
    {
        $this->prePers = $prePers;

        return $this;
    }

    public function getDatnaissPers()
    {
        return $this->datnaissPers;
    }

    private function _setDatnaissPers($datnaissPers)
    {
        $this->datnaissPers = $datnaissPers;

        return $this;
    }

    public function getDomiPers()
    {
        return $this->domiPers;
    }

    private function _setDomiPers($domiPers)
    {
        $this->domiPers = $domiPers;

        return $this;
    }
    public function getProfPers()
    {
        return $this->profPers;
    }

    private function _setProfPers($profPers)
    {
        $this->profPers = $profPers;

        return $this;
    }

    public function getContPers()
    {
        return $this->contPers;
    }

    private function _setContPers($contPers)
    {
        $this->contPers = $contPers;

        return $this;
    }

    public function getEmailPers()
    {
        return $this->emailPers;
    }

    private function _setEmailPers($emailPers)
    {
        $this->emailPers = $emailPers;

        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    private function _setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    public function getMdpad()
    {
        return $this->mdpad;
    }

    private function _setMdpad($mdpad)
    {
        $this->mdpad = $mdpad;

        return $this;
    }
    public function hydra(array $ntab)
		{
				foreach ($ntab as $key => $value) 
				{
					$method="_set".ucfirst($key);
					if (method_exists($this, $method)) 
					{
						$this->$method($value);
					}
				}
		}
}

 ?>