<?php
class database
{
    private $MYSQL_HOST='localhost';
    private $MYSQL_USER='root';
    private $MYSQL_PASS='';
    private $MYSQL_DB='cagricar';
    private $CHARSET='UTF8';
    private $COLLATION='utf8_general_ci';
    private $pdo=null;
    
    public function ConnectDB(){
        $SQL="mysql:host=".$this->MYSQL_HOST.";dbname=".$this->MYSQL_DB;
        try{
            $this->pdo=new \PDO($SQL,$this->MYSQL_USER,$this->MYSQL_PASS);
            $this->pdo->exec("SET NAMES '".$this->CHARSET."' COLLATE '".
            $this->COLLATION."'");
            $this->pdo->exec("SET CHARACTER SET '".$this->CHARSET."'");
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_BOTH);
        }
        catch(PDOException $e)
        {
            die("PDO ile veritabanıa ulaşılamadı" .$e->getMessage());
        }
    }
    

    
    public function __construct()
    {
        $this->ConnectDB();
    }
    
    public function Baglan()
    {
        $this->ConnectDB();
    }
    
    public function TableOperations($query)
    {
        $myTable=$this->pdo->query($query);
        return $myTable;
    }

}

$db = new PDO("mysql:host=localhost; dbname=cagricar; charset=utf8", 'root', ''); 

?>