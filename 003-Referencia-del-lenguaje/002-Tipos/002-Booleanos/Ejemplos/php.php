
<?php
// == es un operador que comprueba la
// igualdad y devuelve un booleano
$accion              = 'mostrar_version';
$mostrar_separadores = true;

if ($accion == "mostrar_version") {

    echo "La versión es 1.23";
}

// esto no es necesario...
if ($mostrar_separadores == true) {

    echo "<hr>\n";
}
echo '<br/>';

// ...porque se puede escribir simplemente:
if ($mostrar_separadores) {

    echo "<hr>\n";
}
?>

