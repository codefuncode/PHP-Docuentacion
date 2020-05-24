
<?php

$a = 1234; // número decimal
echo $a;
echo '<hr/>';
$a = -123; // un número negativo
echo $a;
echo '<hr/>';
$a = 0123; // número octal (equivale a 83 decimal)
echo $a;
echo '<hr/>';
$a = 0x1A; // número hexadecimal (equivale a 26 decimal)
echo $a;
echo '<hr/>';
$a = 0b11111111; // número binario (equivale al 255 decimal)
echo $a;

$número_grande = 2147483647;
var_dump($número_grande); // int(2147483647)

$número_grande = 2147483648;
var_dump($número_grande); // float(2147483648)

$millón        = 1000000;
$número_grande = 50000 * $millón;
var_dump($número_grande); // float(50000000000)
echo '<hr/>';

$número_grande = 9223372036854775807;
var_dump($número_grande); // int(9223372036854775807)

$número_grande = 9223372036854775808;
var_dump($número_grande); // float(9.2233720368548E+18)

$millón        = 1000000;
$número_grande = 50000000000000 * $millón;
var_dump($número_grande);
echo '<hr/>';
var_dump(25 / 7); // float(3.5714285714286)
var_dump((int) (25 / 7)); // int(3)
var_dump(round(25 / 7)); // float(4)

echo '<hr/>';
$ipVal = 255255255255;

// $ipVal = $row['client_IP'];
$ipArr    = array(0 => floor($ipVal / 0x1000000));
$ipVint   = $ipVal - ($ipArr[0] * 0x1000000); // for clarity
$ipArr[1] = ($ipVint & 0xFF0000) >> 16;
$ipArr[2] = ($ipVint & 0xFF00) >> 8;
$ipArr[3] = $ipVint & 0xFF;

$ipDotted = implode('.', $ipArr);
$size     = count($ipArr);
for ($i = 0; $i < $size; $i++) {
    echo $ipArr[$i];
    echo '<br/>';
}
echo $ipDotted;
echo '<hr/>';
$ipArr = explode('.', $ipDotted);

$ipVal = ($ipArr[0] << 24)
     + ($ipArr[1] << 16)
     + ($ipArr[2] << 8)
     + $ipArr[3]
;
for ($i = 0; $i < $size; $i++) {
    echo $ipArr[$i];
    echo '<br/>';
}