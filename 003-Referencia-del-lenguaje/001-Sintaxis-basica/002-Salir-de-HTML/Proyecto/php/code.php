
 <?php echo 'si quiere proveer código de PHP a documentos XHTML o XML,emplee estas etiquetas'; ?>

<?='imprimir esta cadena'?>.
 <!--    Siempre está habilitada en PHP 5.4.0 y posterior, y es equivalente a -->
    <?php echo 'imprimir esta cadena' ?>.

<?echo 'este código está dentro de etiquetas abreviadas, aunque sólo ' . 'funcionará si short_open_tag está habilitada'; ?>
<!-- <script language="php">
        echo 'a algunos editores (como FrontPage) no les gustan
              las instruciones de procesamiento dentro de estas etiquetas';
    </script> -->
    <!-- Esta sintaxis ha sido eliminada en PHP 7.0.0. -->

<!--  <% echo 'Opcionalmente, se pueden emplear las etiquetas al estilo de ASP'; %> -->
  <!--   El código dentro de estas etiquetas <%= $variable; %> es una abreviatura para este código <% echo $variable; %>
    Ambas sintaxis han sido eliminadas en PHP 7.0.0. -->
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
<hr/>
<?php
$me = 'Pyornide';
?>
<?=$me;?>
<br/>
<?php
$me = strtoupper($me);
?>
<?=$me;?>