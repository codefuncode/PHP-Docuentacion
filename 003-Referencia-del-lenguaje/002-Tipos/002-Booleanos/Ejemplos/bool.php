
<?php
var_dump((bool) ""); // bool(false)
echo 'var_dump((bool) ""); <hr/>';
var_dump((bool) 1); // bool(true)
echo 'var_dump((bool) 1); <hr/>';
var_dump((bool)  - 2); // bool(true)
echo 'var_dump((bool)  - 2); <hr/>';
var_dump((bool) "foo"); // bool(true)
echo 'var_dump((bool) "foo"); <hr/>';
var_dump((bool) 2.3e5); // bool(true)
echo 'var_dump((bool) 2.3e5); <hr/>';
var_dump((bool) array(12)); // bool(true)
echo 'var_dump((bool) array(12)); <hr/>';
var_dump((bool) array()); // bool(false)
echo 'var_dump((bool) array()); <hr/>';
var_dump((bool) "false"); // bool(true)
echo 'var_dump((bool) "false"); ';
echo '<hr/>';
$x = true;
$y = false;
$z = $y or $x;
var_dump($z);
echo '<hr/>';
$z = $y || $x;
var_dump($z);

// Consider that the 0 could by any parameters including itself
var_dump(0 == 1); // false
var_dump(0 == (bool) 'all'); // false
var_dump(0 == 'all'); // TRUE, take care
var_dump(0 === 'all'); // false

// To avoid this behavior, you need to cast your parameter as string like that :
var_dump((string) 0 == 'all'); // false

// function remove_element($element, $array)
// {

//     $index = array_search($element, $array); // EStoy buscando el valor aqui

//     unset($array[$index]); // Destruir valor

//     return $array; // Retorno
// }

// $array = remove_element('A', $array);

// echo var_dump(unset($array[1]));
// echo var_dump(unset($array[2]));
// echo var_dump(unset($array[3]));

// for ($i = 0; count($array) + 1 > $i; $i++) {

//     if (unset($array[$i])) {

//         echo $array[$i]; // Mostrar valores
//     }

//     echo '<br/>';
// }

//correct
// function remove_element($element, $array)
// {
//     $index = array_search($element, $array);
//     if ($index !== false) {
//         unset($array[$index]);
//     }
//     return $array;
// }
// $array = ['A', 'B', 'C'];
// $array = remove_element('A', $array);

// for ($i = 0; count($array) > $i; $i++) {

//     echo $array[$i]; // Mostrar valores
// }
$var1 = true;
$var2 = false;
echo '<hr/>';
echo $var1; // Will display the number 1
echo '<hr/>';
echo $var2; //Will display nothing
echo '<hr/>';
/* To get it to display the number 0 for
a false value you have to typecast it: */

echo (int) $var2; //This will display the number 0 for false.
