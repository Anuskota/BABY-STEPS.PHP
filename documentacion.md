PHP
PHP  Preprocesador de hipertexto" se trata de un procesador de hipertexto que se utiliza frecuentemente para el desarrollo de sitios web de contenido dinámico. Se trata de un lenguaje de programación backend, es decir, que tiene que ver con lo que no puede ver el usuario, ya que es el encargado de conectar con una base de datos y un servidor.Poderosa herramienta para crear páginas web dinámicas e interactivas.

Los dumentos de PHP se inicializan y se cierran de la siguiente manera:

<?php

?>

Las variables se declaran con -$txt  = “Hola”-
Echo “$txt como estas?” // Para imprimir

Los tipos de datos admitidos en php son los siguientes:

Integer.
Float.
String.
Boolean.
Array.
Object.
Callable. Funciones
Iterable. 

Variable local y variable global.
- Variable Local: Una variable local se define dentro de una función y solo es accesible dentro de esa función. No se puede acceder a una variable local fuera del ámbito de la función en la que se define.
- Variable global: Una variable global se declara fuera de cualquier función y está disponible en todo el script. Puede ser accedida desde cualquier parte del código, ya sea dentro o fuera de las funciones.

La funciones en php se declaran igual que en JS lo unico que las variables utilizadas se declaran de la forma que hemos explicado arriba:

function saludar ($nombre){
    echo "HOla, $nombre";
}
saludar("Anuski);

Para reutilizar funciones externas en nuestro archivo php lo haremos con las siguientes sentencias:

- Include
- Require
- Include one ( una vez)
- Require one ( uuna vez)

MODIFICADORES DE ACCESO: Public, Protected y Private
Uno de los principios de la programación orientada a objetos es la encapsulación, que es un proceso por el que se ocultan las características internas de un objeto a aquellos elementos que no tienen porque conocerla. Los modificadores de acceso sirven para indicar los permisos que tendrán otros objetos para acceder a sus métodos y propiedades.

Modificador public
Es el nivel de acceso más permisivo. Sirve para indicar que el método o atributo de la clase es público. En este caso se puede acceder a ese atributo, para visualizarlo o editarlo, por cualquier otro elemento de nuestro programa. Es el modificador que se aplica si no se indica otra cosa.

Modificador Private :
Es el nivel de acceso más restrictivo. Sirve para indicar que esa variable sólo se va a poder acceder desde el propio objeto, nunca desde fuera. Si intentamos acceder a un método o atributo declarado private desde fuera del propio objeto, obtendremos un mensaje de error indicando que no es posible a ese elemento.

Modificador Protected:
Este indica un nivel de acceso medio y un poco más especial que los anteriores. Sirve para que el método o atributo sea público dentro del código de la propia clase y de cualquier clase que herede de aquella donde está el método o propiedad protected. Es privado y no accesible desde cualquier otra parte. Es decir, un elemento protected es público dentro de la propia clase y en sus heredadas.