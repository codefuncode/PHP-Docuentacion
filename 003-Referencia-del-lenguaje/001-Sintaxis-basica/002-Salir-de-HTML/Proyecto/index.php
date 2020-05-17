<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Document</title>
</head>
<body>

<?php
$expresion1 = false;
$verdadero  = 'Verdadero';
$falso      = 'falso';
?>

<?php if ($expresion1 == true): ?>

  <p> <?php echo $verdadero; ?> </p>

  <?php echo '<hr/>'; ?>

<?php else: ?>

   <p><?php echo $falso; ?> </p>

   <?php echo '<hr/>'; ?>

<?php endif;?>

<?echo 'este código está dentro de etiquetas abreviadas,
 aunque sólo ' . 'funcionará si short_open_tag está habilitada'; ?>

</body>
</html>
