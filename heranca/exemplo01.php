<?php
    class Documento {

        private $numero;

        public function getNumero() {
            return $this->numero;
        }

        public function setNumero($n) {
            $this->numero = $n;
        }
    }

    class CPF extends Documento {

        public function validar() : bool {

            // Validação do CPF
            return true;
        }
    }

    $doc = new CPF();
    $doc->setNumero(55544488835);
    $doc->validar();
    echo $doc->getNumero();
?>
