<?php
    class Animal {
        const TIPO = "Animal";

        public function emitirSom(): string {
            return "[som genérico]";
        }

        public static function identificar(): string {
            return static::TIPO;
        }
    }

    class Cachorro extends Animal {
        const TIPO = "Cachorro";

        public function emitirSom(): string {
            return parent::emitirSom() . "[latido]";
        }
    }

    $cachorro = new Cachorro();
    
    echo $cachorro->emitirSom();
?>
