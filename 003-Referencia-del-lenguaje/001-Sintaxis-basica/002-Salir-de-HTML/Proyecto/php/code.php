
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

 <% echo 'Opcionalmente, se pueden emplear las etiquetas al estilo de ASP'; %>
  <!--   El código dentro de estas etiquetas <%= $variable; %> es una abreviatura para este código <% echo $variable; %>
    Ambas sintaxis han sido eliminadas en PHP 7.0.0. -->