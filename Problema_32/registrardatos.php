<?php
$nombre = $_POST['nombre'];
$voto=$_POST["voto"];

echo "<h2>---FORMULARIO RESPUESTAS---</h2>";
echo "Nombre: " . $nombre . "<br/>";
for ($i=0;$i<count($voto);$i++)    
{     
echo "<br> Voto: " . $voto[$i];    
}
?>