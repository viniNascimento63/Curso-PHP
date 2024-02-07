<?php

class Usuario {
    private $id_usuario;
    private $desc_login;
    private $desc_senha;
    private $data_cadastro;

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

    public function set_desc_login(String $login) : void {
        $this->desc_login = $login;
    }

    public function set_desc_senha(String $pass) : void {
        $this->desc_senha = $pass;
    }

    public function set_data_cadastro($data) : void {
        $this->data_cadastro = $data;
    }

    // Carrega dados de um usuário através do id
    public function load_by_id(int $id) : void {
        $sql = new Sql();
        $results = $sql->select('SELECT * FROM tb_usuarios WHERE id_usuario = :ID', array(
            ':ID'=>$id
        ));

        // Verifica se existe no mínimo um usuário cadastrado
        if (isset($results[0])) {
            $row = $results[0];

            // Armazena os valores retornados nos atributos do usuário
            $this->set_id_usuario($row['id_usuario']);
            $this->set_desc_login($row['desc_login']);
            $this->set_desc_senha($row['desc_senha']);
            $this->set_data_cadastro(new DateTime($row['dt_cadastro']));
        }
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


    public function login(string $login, string $pass) : void {
        $sql = new Sql();
        $results = $sql->select('SELECT * FROM tb_usuarios WHERE desc_login = :LOGIN AND desc_senha = :PASS', array(
            ':LOGIN'=>$login,
            ':PASS'=>$pass
        ));

        // Verifica se existe no mínimo um usuário cadastrado
        if (isset($results[0])) {
            $row = $results[0];

            // Armazena os valores retornados nos atributos do usuário
            $this->set_id_usuario($row['id_usuario']);
            $this->set_desc_login($row['desc_login']);
            $this->set_desc_senha($row['desc_senha']);
            $this->set_data_cadastro(new DateTime($row['dt_cadastro']));            
        } 
        // Lança uma exceção caso não seja encontrado o login e senha
        else {
            throw new Exception("Login e/ou senha inválidos!");
        }
    }

    // Retorna um json quando for dado echo um objeto Usuario
    public function __toString() : string {
        return json_encode(array(
            'id_usuario'=>$this->get_id_usuario(),
            'desc_login'=>$this->get_desc_login(),
            'desc_senha'=>$this->get_desc_senha(),
            'data_cadastro'=>$this->get_data_cadastro()->format('d/m/Y - H:i')
        ));
    }
}
