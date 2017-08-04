<?php 
require_once '../Model/TypeMat.php';

class  ControlTypemat
{
	private static $conx=null;
	
	function __construct()
	{
		self::$conx=Connexion::getConnexion();
	}
	public function ajouterMat($mt)
	{
		$rep=self::$conx->prepare("INSERT INTO typeMat VALUES (\N,?,now(),now())");
		$resul=$rep->execute(array(
			$mt->getLibtype()
			));
		return $resul;
	}

	public function affichetout()
	{
			$li="SELECT * from typeMat";
			$exe=self::$conx->query($li);
			$table=array();
			while ($ro=$exe->fetch(PDO::FETCH_ASSOC))
			{
			 	$table[]= $ro;					
			 }
			return $table;			
		}

		public function affich($id)
	{
			$li="SELECT * from typeMat WHERE idtype = $id";
			$exe=self::$conx->query($li);
			$table=array();
			while ($ro=$exe->fetch(PDO::FETCH_ASSOC))
			{
			 	$table[]= $ro;					
			 }
			return $table;			
		}
}


 ?>