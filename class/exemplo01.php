<?php
class Pessoa {
    public $nome;

    public function falar() {
        return "Meu nome é $this->nome.";
    }
}

$p1 = new Pessoa();
$p1->nome = 'Vinícius';
echo $p1->falar();
?>
