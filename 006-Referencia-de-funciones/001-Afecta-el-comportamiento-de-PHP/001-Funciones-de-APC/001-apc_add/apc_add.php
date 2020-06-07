
<?php
$bar = 'BAR';
apc_add('foo', $bar);
var_dump(apc_fetch('foo'));
echo "\n";
// $bar = 'NUNCA SE ESTABLECE';
// apc_add('foo', $bar);
// var_dump(apc_fetch('foo'));
// echo "\n";
?>

