<?php 

class Profil
{
	private $idprofil;
	private $libprofil;
	private $nivouser;
	private $dateajout;
	private $datemodif;
	
	function __construct(array $tab)
		{
			$this->hydra($tab);
		}

    function getIdprofil()
	    {
	        return $this->idprofil;
	    }

    function setIdprofil($idprofil)
	    {
	        $this->idprofil = $idprofil;

	    }

    function getLibprofil()
	    {
	        return $this->libprofil;
	    }
    function setLibprofil($libprofil)
	    {
	        $this->libprofil = $libprofil;
	    }
    function getNivouser()
	    {
	        return $this->nivouser;
	    }

    function _setNivouser($nivouser)
	    {
	        $this->nivouser = $nivouser;
	    }
    function getDateajout()
	    {
	        return $this->dateajout;
	    }
    function _setDateajout($dateajout)
	    {
	        $this->dateajout = $dateajout;
	    }
    function getDatemodif()
	    {
	        return $this->datemodif;
	    }

    function _setDatemodif($datemodif)
	    {
	        $this->datemodif = $datemodif;
	    }
	public function hydra(array $tab)
		{
			foreach ($tab as $key => $value) {
				$method="set".ucfirst($key);
				if (method_exists($this, $method)) {
					$this->$method($value);
				}
			}
			
		}
}

 ?>