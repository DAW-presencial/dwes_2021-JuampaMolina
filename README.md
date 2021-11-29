# dwes_2021-JuampaMolina

### 3
En versiones de 32 bits es 2147483647.
En versiones de 64 bits es 9223372036854775807.

### 4
Cuando instanciamos una clase, se crea automáticamente una propiedad para ese objeto cuando hacemos una asignación a una propiedad que no tiene. La propiedad se ha añadido al objeto pero no a la clase ni a los futuros objetos instanciados a partir de esa clase

### 5
Si accedemos a una propiedad que no existe, primero intentará ejecutar el método mágico `__get` de su clase, si no está definido ejecutará la de la clase padre.

De igual forma sucede con el método `__set` cuando asignamos un valor a una propiedad no existente

Para poder acceder a estos y al resto de métodos y propiedades de la clase padre, es necesario que sean public, si son private o protected, el hijo no puede acceder

### 6
El ejercicio 6 está codificado en el archivo 6.php

Todos los ejercicios están en `/home/jruiz/src/dwes_2021-JuampaMolina`. El 6 es el único que he publicado en `/var/www/ifc33x/jruiz`
