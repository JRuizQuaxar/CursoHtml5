<?php
$nombre = $_POST['nombre'];

echo "<h2>---FORMULARIO RESPUESTAS---</h2>";
echo "Nombre: " . $nombre . "<br/>";
if(isset($_POST['submit'])){
if(!empty($_POST['SO'])){
foreach($_POST['SO'] as $selected){
echo $selected."</br>";
}
}
}
?>