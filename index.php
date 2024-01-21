<?php
//Creacion de variables e imprime por pantalla

$nombre="anuska";
$apellidos="troski moski";
$edad=35;
$segoviana=true;
$altura=1.821;
$comidaFavorita=["migas", "sopa castellana", "fabada asturiana", "queso cabrales"];
$intrumentos = [
    "guitarra" => "electrica",
    "bateria" =>"acustica",
    "flauta" => "dulce",
    "cajón" => "flamenco",
    "armonica" => "do",
    "teclado" => "electrico",
    "ukelele" => "madera",
    "arpa" => "boca",
    
];

$moto = null;

var_dump($intrumentos);
print_r($intrumentos);
var_dump($altura);
var_dump($moto);
var_dump($segoviana);
print_r($altura);
print_r($moto);
print_r($segoviana);

//Convertir Strings a Mayusculas
$aMayusculas = strtoupper($nombre);
var_dump($aMayuscula8s);

// COntar el numero de caracteres

echo str_word_count($apellidos);

//Invertir string

$invertir = strrev($apellidos);
echo $invertir;

//Funciones PHP
function get_country(){
    $random_number = rand(1,5);
    //echo $random_numer;
    print_r($random_number);

    switch($random_number) {//Aqui compara el numero random que  nos ha dado conlas opciones y evalua los casos, si encuentra loq ue quiere Break y cierra
        case 1:
            echo "Irlanda";
            break;
        case 2:
            echo "Venezuela";
            break;
        case 1:
            echo "Alemania";
            break;
        case 1:
            echo "India";
            break;
        case 1:
            echo "Japon";
            break;  
        default:
            echo " No se ha encntrado ningún pais";
    };
};
get_country();

//Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla. 

$comidaFavorita [] = "patatas fritas";
print_r($comidaFavorita);

//Ahora agrega 2 elementos más a tu array e imprime en pantalla.
array_push($comidaFavorita,"3", "cocido");
print_r($comidaFavorita);

//Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.

$bebidaFavorita = ["cerveza", "agua", "vino", "sidra"];

$resultadoArray = array_merge($comidaFavorita,$bebidaFavorita);
print_r($resultadoArray);

//Crear una función que imprima en consola y pantalla todos los números de un array en una lista


function misNumerosFavoritos() {
    $numbers = [4, 17, 6, 78, 22, 1, 25, 221, 44];
    return $numbers;
}
print_r(misNumerosFavoritos());

//Crear una función que añade un número al array















?>