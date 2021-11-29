<?php

class Triangulo {
}

$triangulo1 = new Triangulo();

$triangulo1->base = 3;

$altura = $triangulo1->altura;

echo("$triangulo1->base");

$triangulo2 = new Triangulo();
echo("$triangulo2->base");

// Cuando instanciamos una clase, se crea automáticamente
// una propiedad para ese objeto cuando hacemos una 
// asignación a una propiedad que no tiene. La propiedad
// se ha añadido al objeto pero no a la clase ni a 
// los futuros objetos instanciados a partir de esa clase