<?php
class Connection {

  /**
   * @var Singleton
   * @access private
   * @static
   */
   private static $_instance = null;

   /**
    * Constructeur de la classe
    *
    * @param void
    * @return void
    */
   private function __construct() {
     $_instance = new PDO('mysql:host=localhost:3306;dbname=siefreiprojet', 'root', '');
   }

   /**
    * Méthode qui crée l'unique instance de la classe
    * si elle n'existe pas encore puis la retourne.
    *
    * @param void
    * @return Singleton
    */
   public static function getInstance() {

     if(is_null(self::$_instance)) {
       self::$_instance = new Connection();
     }

     return self::$_instance;
   }
}



function insertUser($nom, $prenom, $mail, $license, $mdp)
{
  $db =Connection::getInstance();

}


insertUser("test","test","test","test","test");









?>
