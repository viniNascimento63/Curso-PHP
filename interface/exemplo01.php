<?php
    interface Veiculo {
        public function acelerar($velocidade);
        public function frear($velocidade);
        public function trocarMarcha($marcha);
    }

    class Civic implements Veiculo {
        public function acelerar($velocidade) {
            echo "O veículo acelerou até $velocidade km/h.<br>";
        }
        
        public function frear($velocidade) {
            echo "O veículo freou até $velocidade km/h.<br>";
        }

        public function trocarMarcha($marcha) {
            echo "O veículo engatou a marcha: $marcha.<br>";
        }
    }

    $carro = new Civic();
    $carro->trocarMarcha(1);
    $carro->acelerar(15);
    $carro->frear(0);
?>
