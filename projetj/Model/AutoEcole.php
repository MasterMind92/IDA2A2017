<?php
 class AutoEcole
	{
		private $idAuto;
		private $idSp;
		private $libeAuto;
		private $contAuto;
		private $situgeo;
		private $adrs;
		private $emailAuto;
		private $idadmin;
			
		function __construct(array $tab)
		{
			$this->hydra($tab);
		}
			function setIdAuto($idAuto)
			{
				$this->idAuto=$idAuto;
			}
			function setIdSp($idSp)
			{
				$this->idSp=$idSp;
			}
			function setLibeAuto($libeAuto)
			{
				$this->libeAuto=$libeAuto;
			}
			function setContAuto($contAuto)
			{
				$this->contAuto=$contAuto;
			}
			function setSitugeo($situgeo)
			{
				$this->situgeo=$situgeo;
			}
			function setAdrs($adrs)
			{
				$this->adrs=$adrs;
			}
			function setEmailAuto($emailAuto)
			{
				$this->emailAuto=$emailAuto;
			}

			function getIdAuto()
			{
				return $this->idAuto;
			}
			function getIdSp()
			{
				return $this->idSp;
			}
			function getLibeAuto()
			{
				return $this->libeAuto;
			}
			function getContAuto()
			{
				return $this->contAuto;
			}
			function getSitugeo()
			{
				return $this->situgeo;
			}
			function getAdrs()
			{
				return $this->adrs;
			}
			function getEmailAuto()
			{
				return $this->emailAuto;
			}
	  public function getIdadmin()
    {
        return $this->idadmin;
    }

 
    private function setIdadmin($idadmin)
    {
        $this->idadmin = $idadmin;

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