<?php



$nombre = filter_input(INPUT_POST, 'nombre');
$correo = filter_input(INPUT_POST, 'correo');
$contenido = filter_input(INPUT_POST, 'contenido');


echo "Nombre: $nombre<br/>";
echo "Email: $correo<br/>";
echo "Contenido: $contenido<br/>";
echo "<br/><br/>";


$destinatario ="almegon69@gmail.com";
$subject= "Mensaje de prueba de mi app";
$cabeceraFrom="From: $nombre < $correo >";

$a=mail($destinatario, $subject, $contenido, $cabeceraFrom);
if ($a==true)
        echo ("Mensaje enviado correctamente");
else
    echo ("Mensaje no se ha podido enviar");

?>