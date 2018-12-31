
<?php
class DB{
  
  private $host     = 'localhost';
  private $username = 'root';
  private $password = '';
  private $database = 'biocycle';
  private $db;

  public function __construct($host = null, $username = null,
                              $password = null, $database = null) 
  {
      if ($host != null) 
      {
        $this->host     = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
      }                           
  
      try 
      {
        $this->db = new PDO('mysql:dbname='.$this->database.';host='.$this->host, 
                            $this->username, $this->password, 
                            array(
                                   PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                                   PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                                 )
                           );
      } 
      catch (PDOException $e) 
      {
          die('<h1> Impossible de se connecter a la base de donnes </h1><p>'.$e->getMessage().'</p>');
      }
  } #END CONSTRUCTOR FUNCTION

  public function query($sql)
  {
      $req = $this->db->prepare($sql);
      $req->execute();
      return $req->fetchAll(PDO::FETCH_OBJ);
  }

}
?>

