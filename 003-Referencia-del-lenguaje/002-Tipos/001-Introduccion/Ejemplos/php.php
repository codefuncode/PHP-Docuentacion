
<?php
$un_bool = true; // un valor booleano
$un_str  = "foo"; // una cadena de caracteres
$un_str2 = 'foo'; // una cadena de caracteres
$un_int  = 12; // un número entero

echo gettype($un_bool); // imprime: boolean
echo '<hr/>';
echo gettype($un_str); // imprime: string
echo '<hr/>';

// Si este valor es un entero, incrementarlo en cuatro
if (is_int($un_int)) {
    $un_int += 4;
    echo $un_int;
}
echo '<hr/>';

//  Si no es un boleano muestra el reultado
if (!(is_string($un_bool))) {

    echo "Cadena: $un_bool";
}
?>

