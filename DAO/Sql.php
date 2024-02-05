<?php
class Sql extends PDO {
    private $conn;
    private $tipo_banco = 'mysql';
    private $host = 'localhost';
    private $dbname = 'db_php7';
    private $user = 'root';
    private $pass = '';

    // CONSTRUTOR
    public function __construct() {
        $dsn = "$this->tipo_banco:host=$this->host;dbname=$this->dbname";
        $this->conn = new PDO($dsn, $this->user, $this->pass);
    }

    // EXECUTA QUERY (consulta)
    public function executeQuery($rawQuery, $params = array()) {

        $stmt = $this->conn->prepare($rawQuery); 

        $this->setParams($stmt, $params);
        
        $stmt->execute();

        return $stmt;
    }

    private function setParams($statment, $parameters = array()) {
        foreach ($parameters as $key => $value) {
            $this->setParam($statment, $key, $value);
        }
    }

    private function setParam($statment, $key, $value) {
        $statment->bindParam($key, $value);
    }

    public function select($rawQuery, $params = array()) : array {
        $stmt = $this->executeQuery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
