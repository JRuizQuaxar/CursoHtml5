<?php
$nombre = $_POST['nombre'];
$calificacion = $_POST['calificacion'];

echo "<h2>---FORMULARIO RESPUESTAS---</h2>";
echo "Nombre: " . $nombre ;
for ($i=0;$i<count($calificacion);$i++)    
{     
echo "<br> Calificacion: " . $calificacion[$i];   
}
?>