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

    // EXECUTA QUERY (consulta) e retorna um statement (declaração)
    public function executeQuery($rawQuery, $params = array()) {

        $stmt = $this->conn->prepare($rawQuery); 

        $this->setParams($stmt, $params);
        
        $stmt->execute();

        return $stmt;
    }

    // Chama função que liga os parâmetros da query aos valores do array
    private function setParams($statement, $parameters = array()) : void {
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }

    // Liga cada parâmetro ao valor de uma chave
    private function setParam($statement, $key, $value) : void {
        $statement->bindParam($key, $value);
    }

    // Seleciona items do BD e retorna um array com os dados
    public function select($rawQuery, $params = array()) : array {
        $stmt = $this->executeQuery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
