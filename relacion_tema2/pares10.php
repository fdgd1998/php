<?php
// Alumno: Fran Gálvez. 2º ASIR.

// Preparo los ficheros para imprimir el código fuente.
echo "
<form action='../showsource.php' method='post' target='_blank'>
    <input type='hidden' name='filename' value='".__file__."'>
    <input type='submit' value='Ver código fuente'>
</form>";

if($_POST['pares10']) {
    for ($i = 2, $cont = 1; $cont <= 10; $cont++)
         echo $i*$cont,"<br>";
} 
?>