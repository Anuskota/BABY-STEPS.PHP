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
function añadirNumeroArray(){
    $numbers = misNumerosFavoritos();
    array_push($numbers, 5);
    return $numbers;
}
print_r(añadirNumeroArray());

//Crear una función que elimine los números pares de ese array.


function eliminarPares($numbers){
    $numbers = misNumerosFavoritos();
    foreach($numbers as $my_item => $value){
        if($value % 2 === 0){
        unset($numbers[$my_item]);
        
    }
}
    $numbers = array_values($numbers);
    return $numbers;
}

print_r(eliminarPares($numbers));

//funcion que devuelve el mayor numero de un array

function numeroMayor(){
    $numbers2 =[3,44,75,96,32,4,75,10];
    echo max($numbers2);
    
}
//Numero menor
function numeroMenor()
{
    $numbers2 = [3, 44, 75, 96, 32, 4, 75, 10];
    echo min($numbers2) . "\n";
}

numeroMenor();

//CONVIERTE EN MAYUSCULAS UN TEXTO
function mayusculas($nombre){
    $aMayusculas = strtoupper($nombre);
    return $aMayusculas;
    
}
print_r(mayusculas("ana \n"));

function minuscula($nombre)
{
    $aMinusculas = strtolower($nombre);
    return $aMinusculas;
}
print_r(minuscula("ANA "));

//Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre en mayúscula.
function primerMayuscula($array){
    $resultado =array();

    foreach($array as $palabra){
        $palabraCapitalizada = ucwords($palabra);
        $resultado[] = $palabraCapitalizada;
        
    }
    
    return $resultado;

    
}
$comidaFavorita = ["migas", "sopa castellana", "fabada asturiana", "queso cabrales"];
print_r(primerMayuscula($comidaFavorita));


class myCar {
   public $marcas = ["toyota", "Skoda", "renault"];
    
}


//CREAR UNA CLASE COCHE CON SUS ATRIBUTOS Y UN ATRIBUTO PUEDE SER TIPO ARRAY

class Coche {
    
    public $marca= "renault";
    public $numeroDePuertas=7;
    
    public $atributos = [
        "marchas" => 6,
        "ruedas" =>"michelin",
        "asientos" => "cuero"
            
        
    ];

    //Constructor

    public function __construct($marca,$numeroDePuertas){
        $this -> marca = $marca; 
        $this -> numeroDePuertas = $numeroDePuertas; 
    }
    
    //Método para obtener Marca

    public function getMarca(){
    return $this -> marca ;}

    //Funcion para obtener atributos


    public function getAtributos()
    {
        return $this->atributos;
    } 

    //Método para saber las puertas
    public function getPuertas(){
        return $this -> numeroDePuertas;
    }
    
    //Método para estabñecer el nombre

    public function establecerNuevaMarca($nuevaMarca){
        $this -> marca = $nuevaMarca;
    }
}

//Nuevo coche

$micoche = new Coche("Toyota", 7);
echo "Marca de coche:" . $micoche -> getMarca() . "\n";
echo "El número de puertas es:" . $micoche -> getPuertas();
print_r(($micoche -> getAtributos()));









// Multiplicar un numero por 8 si es par o por 9 si es impar, con if refactorizado

function simpleMultiplication($number)
{

    return ($number % 2 === 0) ? $number * 8 : $number * 9;
}












?>