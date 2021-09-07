<?php
$mail = $_POST['mail'];
$clave = $_POST['clave'];

echo "<h2>---FORMULARIO RESPUESTAS---</h2>";
echo "Mail: " . $mail . "<br/>";
echo "Clave: " . $clave . "<br/>";
if(isset($_POST['submit'])){
if(!empty($_POST['pelicula'])){
foreach($_POST['pelicula'] as $selected){
echo $selected."</br>";
}
}
}
?>