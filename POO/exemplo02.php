<?php
class Carro {
    private $modelo;
    private $motor;
    private $ano;

    // Métodos GETTER
    public function getModelo() {
        return $this->modelo;
    }
    public function getMotor() {
        return $this->motor;
    }
    public function getAno() : int {
        return $this->ano;
    }

    // Métodos SETTER
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function setMotor($motor) {
        $this->motor = $motor;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir() {
        return array(
            'modelo' => $this->getModelo(),
            'motor' => $this->getMotor(),
            'ano'=> $this->getAno()
        );
    }
}

$car1 = new Carro();
$car1->setModelo('Ford Fusion');
$car1->setMotor('Ecoboost 2.0');
$car1->setAno(2012);
print_r($car1->exibir());
var_dump($car1->exibir());
?>
