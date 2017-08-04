<?php 
    
	require_once "../Model/Administrateur.php";
	class ControlAdmin
	{
		private $rep=0;
		private $rp=0;
		private $ep=0;
		private static $conx=null;
		
		function __construct()
		{
			self::$conx=Connexion::getConnexion();
		}
		public function add_admin(Administrateur $a)
		
		{
			$rep=self::$conx->prepare("INSERT INTO administrateur VALUES(\N,?,?,?,?,1,now(),now())");
			$result=$rep->execute(array(
					$a->getNomadmin(),
	 				$a->getPrenadmin(),
	 				$a->getLogin(),
	 				$a->getMdpad()
	 			));	
	   return var_dump($result);		
			
		}
		public function mod_admin($nomad,$prenad,$login,$mdpad,$lgA)
		{
			$mo="UPDATE administrateur SET nomad='$nomad',prenad='$prenad',login='$login',mdpad='$mdpad' where login='$lgA'";
			$tex=$this->conx->query($mo);
			if ($tex) {
				$rp=1;
			}else{
				$rp=0;
			}
			return $rp;			
		}
		function authentification($login,$mot){
  $rep=self::$conx->query("SELECT * FROM administrateur");
  $result=$rep->fetchAll(PDO::FETCH_ASSOC);
  $trouver = false;
  for ($i=0; $i <count($result) ; $i++) { 
    if (($result[$i]['login']==$login )AND ($result[$i]['mdpad'] == $mot)) {
    	
    	$trouver = true;
    }
    return $trouver;
  }
  
  
}
		public function sel_login($idadmin)
		{
			$login="SELECT login FROM administrateur WHERE idadmin=$idadmin";
			$exe=$this->conx->query($login);
			$ro=$exe->fetch(PDO::FETCH_ASSOC);
			return $ro;
		}
		public function sup_admin($nomad,$prenad,$login,$mdpad)
		{
			$sup="DELETE FROM administrateur WHERE nomad='$nomad',
			prenad='$prenad',login='$login',mdpad=mdpad";
			$exe=$this->conx->query($sup);
			if ($exe) {
				$rip=1;
			} else {
				$rip=0;
			}
			return $rip;			
		}
		public function list_adimin()
		{
			$li="SELECT * from administrateur";
			$exe=$this->conx->query($li);
			$table=array();
			while ($ro=$exe->fetch(PDO::FETCH_ASSOC))
			{
			 	$table[]=new Administrateur($ro);					
			 }
			return $table;			
		}
		public function seLoguer()
	     {
	    // Hachage du mot de passe
	     	$pass_hache = sha1($_POST['pass']);

				// Vérification des identifiants
				$req = $bdd->prepare('SELECT id FROM administration WHERE login = :login AND mdpad = :mdpad');
				$req->execute(array(
				    'login' => $login,
				    'mdpad' => $pass_hache));

                $resultat = $req->fetch();

					if (!$resultat)
					{
					    echo 'Mauvais identifiant ou mot de passe !';
					}
						else
						{
						    session_start();
						    $_SESSION['id'] = $resultat['id'];
						    $_SESSION['login'] = $login;
						    echo 'Vous êtes connecté !';
											}
					if (isset($_SESSION['id']) AND isset($_SESSION['login']))
					{
					    echo 'Bonjour ' . $_SESSION['login'];
					}
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