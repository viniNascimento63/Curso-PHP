<?php
    abstract class Automovel implements Veiculo {
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
?>