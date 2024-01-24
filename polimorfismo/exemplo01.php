<?php
    abstract class Animal {
        public function comunica() {
            return 'Som';
        }

        public function mover() {
            return 'Anda';
        }
    }

    class Cachorro extends Animal {
        public function comunica() {
            return "Late";
        }
    }

    class Gato extends Animal {
        public function comunica() {
            return "Mia";
        }
    }

    class Passaro extends Animal {
        public function comunica() {
            return "Canta";
        }

        public function mover() {
            return "Voa e ".parent::mover();
        }
    }

    $pluto = new Cachorro();
    echo get_class($pluto).':<br>- '.$pluto->comunica().'<br><br>';

    $garfield = new Gato();
    echo get_class($garfield).':<br>- '.$garfield->comunica().'<br><br>';

    $piupiu = new Passaro();
    echo get_class($piupiu).':<br>- '.$piupiu->comunica().'<br>- ';
    echo $piupiu->mover().'<br><br>';
?>
