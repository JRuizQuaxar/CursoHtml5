<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$comentarios = $_POST['comentarios'];
$pais=$_POST["pais"];
$valoracion=$_POST["valoracion"];

echo "<h2>---FORMULARIO RESPUESTAS---</h2>";
echo "Nombre: " . $nombre . "<br/>";
echo "Mail: " . $mail;

for ($i=0;$i<count($pais);$i++)    
{     
echo "<br> País: " . $pais[$i];   
}
for ($i=0;$i<count($valoracion);$i++)    
{     
echo "<br> Valoración: " . $valoracion[$i];   
}
echo "Comentarios: " . $comentarios . "<br/>";

?>