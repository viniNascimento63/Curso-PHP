<?php

class Usuario {
    private $id_usuario;
    private $desc_login;
    private $desc_senha;
    private $data_cadastro;

    // CONSTRUTOR
    public function __construct(string $login = '', string $pass = '') {
        $this->desc_login = $login;
        $this->desc_senha = $pass;
    }

    // Retorna um json quando for dado echo num objeto Usuario
    public function __toString() : string {
        return json_encode(array(
            'id_usuario'=>$this->get_id_usuario(),
            'desc_login'=>$this->get_desc_login(),
            'desc_senha'=>$this->get_desc_senha(),
            'data_cadastro'=>$this->get_data_cadastro()->format('d/m/Y - H:i')
        ));
    }

    // GETTERS
    public function get_id_usuario() {
        return $this->id_usuario;
    }

    public function get_desc_login() {
        return $this->desc_login;
    }

    public function get_desc_senha() {
        return $this->desc_senha;
    }

    public function get_data_cadastro() {
        return $this->data_cadastro;
    }

    // SETTERS
    public function set_id_usuario(int $id) : void {
        $this->id_usuario = $id;
    }

    public function set_desc_login(string $login) : void {
        $this->desc_login = $login;
    }

    public function set_desc_senha(string $pass) : void {
        $this->desc_senha = $pass;
    }

    public function set_data_cadastro($data) : void {
        $this->data_cadastro = $data;
    }

    public function setData(array $datas) : bool {

        // Verifica há um elemento dentro de $results
        if (isset($datas[0])) {
            $data = $datas[0];

            $this->set_id_usuario($data['id_usuario']);
            $this->set_desc_login($data['desc_login']);
            $this->set_desc_senha($data['desc_senha']);
            $this->set_data_cadastro(new DateTime($data['dt_cadastro']));

            return true;
        }
        return false;
    }

    // Carrega dados de um usuário através do id
    public function load_by_id(int $id) : void {
        $sql = new Sql();
        $results = $sql->select('SELECT * FROM tb_usuarios WHERE id_usuario = :ID', array(
            ':ID'=>$id
        ));

        // Armazena os dados retornados nos atributos do objeto
        $this->setData($results);
    }

    // Retorna uma lista de usuários
    public static function get_list() : array {
        $sql = new Sql();
        return $sql->select('SELECT * FROM tb_usuarios ORDER BY desc_login');
    }

    // Retorna uma lista de usuários de login específico
    public static function search(string $login) : array {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE desc_login LIKE :SEARCH ORDER BY desc_login", array(
            ':SEARCH'=>'%'.$login.'%'
        ));
    }

    // Retorna usuário se login e senha existirem
    public function login(string $login, string $pass) : void {
        $sql = new Sql();
        $results = $sql->select('SELECT * FROM tb_usuarios WHERE desc_login = :LOGIN AND desc_senha = :PASS', array(
            ':LOGIN'=>$login,
            ':PASS'=>$pass
        ));

        if ($this->setData($results) === false) {                       
            // Lança uma exceção caso não seja encontrado o login e senha
            throw new Exception("Login e/ou senha inválidos!");
        }  
    }

    // Insere um novo usuário na tabela usando PROCEDURE
    public function insert() : void {
        $sql = new Sql();
        $results = $sql->select('CALL sp_usuarios_insert(:LOGIN, :PASS)', array(
            ':LOGIN'=>$this->get_desc_login(),
            ':PASS'=>$this->get_desc_senha()
        ));

        $this->setData($results);
    }

    // Altera dados de login e senha
    public function update(string $login, string $pass) : void {
        $this->set_desc_login($login);
        $this->set_desc_senha($pass);

        $sql = new Sql();
        $sql->executeQuery('UPDATE tb_usuarios SET desc_login = :LOGIN, desc_senha = :PASS WHERE id_usuario = :ID', array(
                ':LOGIN'=>$this->get_desc_login(),
                ':PASS'=>$this->get_desc_senha(),
                ':ID'=>$this->get_id_usuario()
            ));
    }

    // Deleta usuário
    public function delete(int $id) : void {
        $this->set_id_usuario($id);
        
        $sql = new Sql();
        $sql->executeQuery('DELETE FROM tb_usuarios WHERE id_usuario = :ID', array(
            ':ID'=>$this->get_id_usuario()
        ));
    }
}
