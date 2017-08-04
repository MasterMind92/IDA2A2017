<?php 
 

		class Connexion
		{
			private static $conx;
		    private static $dns="mysql:host=localhost;dbname=projet";
			private static $user="root";
			private static $pwd="";
				
				function __construct()
				{
			       
					
				}
				public static function getConnexion()
				{
					self::$conx= new PDO(self::$dns,self::$user,self::$pwd);
					return self::$conx;
				}	

}	
 ?>