<?php 
require_once "../Model/Profil.php";
 class ControlProfil
	{
		private $rep=0;
		private $rp=0;
		private $rip=0;		
		function __construct()
		{
			$this->conx=Connexion::getConnexion();
		}
		public function add_profil(Profil $pr)
			{
				$t="INSERT INTO profil(libprofil,nivouser,dateajout,datemodif) values ('$pr->getLibprofil','$pr->getNivouser',$pr->getDateajout,$pr->getDatemodif)";
				$exe=$this->conx->query($t);
				if ($exe) {
					$rep=1;
				} else {
					$rep=0;
				}
				return $rep;				
			}
		public function mod_profil($libprofil,$nivouser,$dateajout,$datemodif)
			{
				$mod="UPDATE profil SET libprofil='$libprofil',nivouser='$nivouser',dateajout=dateajout,datemodif=datemodif";
				$exe=$this->conx->query($mod);
				if ($exe) {
					$rp=1;
				} else {
					$rp=0;
				}		
				
			}
		public function getProfil()
		{
			$A="SELECT * from profil";
			$exe=$this->conx->query($A);
			$table=array();
			while ($rep=$exe->fetch(PDO::FETCH_ASSOC))
			{
			 	$table[]=$rep;							
			 }
			return $table;			
		}
	}

 ?>