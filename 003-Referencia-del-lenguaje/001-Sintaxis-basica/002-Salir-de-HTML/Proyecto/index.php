<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Document</title>
</head>
<body>
	<!-- ================================================== -->
	<!--
		Se recominda usar la etiqueeta
		tradicional de apertura <?php ?>
		para evitar con flictos de compatibilidad
		con los servidores.
	-->
	<!-- ================================================== -->

<?php
$expresion1 = false;
$verdadero  = 'Verdadero';
$falso      = 'falso';
$highlight  = true;
?>
<!-- ======================================================== -->

<?php if ($expresion1 == true): ?>

  <p> <?php echo $verdadero; ?> </p>

  <?php echo '<hr/>'; ?>

<?php else: ?>

   <p><?php echo $falso; ?> </p>

   <?php echo '<hr/>'; ?>

<?php endif;?>
<!-- ======================================================== -->

<?echo 'este código está dentro de etiquetas abreviadas,
 aunque sólo ' . 'funcionará si short_open_tag está habilitada'; ?>

<!-- ========================================================= -->
<!--
	Podemos hacer condicionales dentro de las etiquetas y
	aplicar un atributo o nombre de atributo dependiendo el
	resultado del condicional
-->
<!-- =============================================================================== -->
 <p<?php if ($highlight): ?> class="highlight"<?php endif;?>>This is a paragraph.</p>
 <hr/>
 <!-- =============================================================================== -->

<!-- ========================================================= -->
<!-- ========================================================== -->
<!--  Se observa que una sentencia PHP dentro de una variable es
	considerada testo  y en adición PHP lo considera como comentario  -->
<!-- ========================================================= -->
 <?php
$file_contents = '<?php die(); ?>' . "\n";
echo $file_contents;
?>
<!-- ========================================================= -->
<?php
//  $file_contents  = '<?php die(); ?>' . "\n";
?>
 <hr/>
 <!-- ========================================================= -->
 <?php
$file_contents = '<' . '?php die(); ?' . '>' . "\n";
echo $file_contents;
?>
<!-- ========================================================== -->
<!-- ========================================================= -->

<!-- ========================================================= -->
<hr/>
<!-- ======================================== -->
<!--  -->
<?php for ($i = 0; $i < 5; ++$i): ?>

<br/> Hello, there!

<?php endfor;?>
<!-- ======================================== -->
</body>
</html>
