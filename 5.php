<?php

class Figura {
    public function __get(mixed $var) {

        echo "La propiedad $var no existe";
    }

    public function __set(string $name, mixed $value ) {

        echo "La propiedad $name ahora vale $value";
    }
};

class Triangulo extends Figura {
    public function __get(mixed $var) {

        echo "La propiedad de triangulo $var no existe";
    }

    public function __set(string $name, mixed $value ) {

        echo "La propiedad de triangulo $name ahora vale $value";
    }
}

$triangulo1 = new Triangulo();
// echo($triangulo1->base);
$triangulo1->altura = 3;
echo($triangulo1->altura);

// Si accedemos a una propiedad que no existe, primero 
// intentará ejecutar el método mágico __get de su clase,
// si no está definido ejecutará la de la clase padre.

// De igual forma sucede con el método __set cuando
// asignamos un valor a una propiedad no existente

// Para poder acceder a estos y al resto de métodos 
// y propiedades de la clase padre, es necesario que
// sean public, si son private o protected, el hijo no
// puede acceder