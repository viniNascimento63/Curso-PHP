<?php
class Cadastro {
    private $nome;
    private $email;
    private $senha;
    
    // Getters
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    // Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function __toString() {
        return json_encode(
            array(
                'Nome' => $this->getNome(),
                'E-mail' => $this->getEmail(),
                'Senha' => $this->getSenha()
            )
        );
    }
}
?>
