<?php
if(isset($_POST['numero'])) {
    $ingrese_un_numero= $_POST['numero'];

    if($ingrese_un_numero < 0) {
        echo "Error no se puede calcular un numero Negativo.";
    } else {
       $numero_raiz= calcular_raiz($ingrese_un_numero);
       $numero_potencia= calcular_potencia($ingrese_un_numero, 2);

       echo "El resultado de la raiz cuadrada es $numero_raiz <br>";
       echo "El numero de la potencia es $numero_potencia <br/>";
    }
}
function calcular_raiz($numero) {
    return sqrt($numero);
}
function calcular_potencia($base, $exponente) {
    return pow($base, $exponente);
}
      

?>