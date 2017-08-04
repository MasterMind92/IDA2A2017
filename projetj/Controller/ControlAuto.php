<?php 
 	require_once "../Model/AutoEcole.php";
 	
 	class ControlAuto
 	{
 		private static $rep=0;
		private static $rp=0;
	    private  $rip=0;
	    private static $conx=null;
		
		function __construct()
		{
			self::$conx=Connexion::getConnexion();
		}
 		public function add_auto(Autoecole $e)
	 		{
	 			
	 			$rep=self::$conx->prepare("INSERT INTO autoEcole VALUES(null,?,?,?,?,?,?,?,now(),now())");
	 			$result=$rep->execute(array(
	 				$e->getIdSp(),
	 				$e->getLibeAuto(),
	 				$e->getContAuto(),
	 				$e->getSitugeo(),
	 				$e->getAdrs(),
	 				$e->getEmailAuto(),
	 				$e->getIdadmin()
	 			));	
	   	return $result;			
	 		}
   public function up_autoecole($idSp,$libeAuto,$contAuto,$situgeo,$adrs,$emauto) 
	    {
		$A="UPDATE autoecole SET idSp='$idSp', libeAuto='$libeAuto', contAuto='$contAuto',
			situgeo='$situgeo', adrs='$adrs', emailAuto='$emailAuto'";
		$exe=self::$conx->query($A);
			if ($exe) {

				$rp=-1;
			}
			else{
				$rp=1;
			}
			return $rp;
		}
	public function sup_auto($idAuto)
 		{
 			
 			 $supp=self::$conx->query("SELECT idPers FROM personnel WHERE idAuto=$idAuto");
 			 $res=$supp->fetchAll();
 			$id=array();
 			if (count($res)>0) {
 				for ($i=0; $i <count($res) ; $i++) { 
 				$id[$i]=$res[$i][0];
 			}
 			
 			$ids=implode(',', $id);
 			if ($this->supf($ids)) {
 				 $supp=self::$conx->query("DELETE FROM personnel WHERE idAuto=$idAuto");
 				  $supa=self::$conx->query("DELETE FROM autoecole WHERE idAuto=$idAuto");
 				if ($supa) {

				$rip=-1;
			}
			else{
				$rip=1;
			}
								}
			}
			else{
			$supa=self::$conx->query("DELETE FROM autoecole WHERE idAuto=$idAuto");	
		if ($supa) {

				$rip=-1;
			}
			else{
				$rip=1;
			}
			return $rip;
			}
 			#print_r($id);
 			#exit();
 			 
 			
			
		}
		public function supf($id){
			$req=self::$conx->query("DELETE FROM faire where idPers IN ('$id')");
			if ($req) {
				return true;
			}
			else {
				return false;
			}
		}
	public function getauto()
		{
			$A="SELECT * FROM autoEcole";
			$exe=self::$conx->query($A);
			$table=array();
			while ($rep=$exe->fetch())
			{
			 	$table[]=$rep;							
			 }
			return $table;			
		}
		function authentification($login,$mot){
  $rep=self::$conx->query("SELECT * FROM autoecole");
  $result=$rep->fetchAll(PDO::FETCH_ASSOC);
  $trouver = false;
  for ($i=0; $i <count($result) ; $i++) { 
    if (($result[$i]['login']==$login )AND ($result[$i]['passAuto'] == $mot)) {
    	
    	$trouver = true;
    }

  }
  return $trouver;
  
}
public function seDeLoguer()
	     {
	     	session_start();
// Suppression des variables de session et de la session
			$_SESSION = array();
		    session_destroy();
// Suppression des cookies de connexion automatique
			setcookie('login', '');
			setcookie('pass_hache', '');
	     } 

 	}


 ?>