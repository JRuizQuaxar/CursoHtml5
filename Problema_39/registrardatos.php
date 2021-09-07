<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$pizza1=$_POST["pizza1"];
$cantidad1=$_POST["cantidad1"];
$pizza2=$_POST["pizza2"];
$cantidad2=$_POST["cantidad2"];
$pizza3=$_POST["pizza3"];
$cantidad3=$_POST["cantidad3"];

echo "<h2>---FORMULARIO RESPUESTAS---</h2>";
echo "Nombre: " . $nombre . "<br/>";
echo "Nombre: " . $direccion . "<br/>";
echo "Nombre: " . $telefono . "<br/>";
for ($i=0;$i<count($pizza1);$i++)    
{     
echo "<br> Pizza1: " . $pizza1[$i];   
}
for ($i=0;$i<count($cantidad1);$i++)    
{     
echo "<br> Cantidad1: " . $cantidad1[$i];   
}
for ($i=0;$i<count($pizza1);$i++)    
{     
echo "<br> Pizza2: " . $pizza2[$i];   
}
for ($i=0;$i<count($cantidad2);$i++)    
{     
echo "<br> Cantidad2: " . $cantidad2[$i];   
}
for ($i=0;$i<count($pizza2);$i++)    
{     
echo "<br> Pizza3: " . $pizza3[$i];   
}
for ($i=0;$i<count($cantidad3);$i++)    
{     
echo "<br> Cantidad3: " . $cantidad3[$i];   
}
?>