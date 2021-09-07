<?php
$paises=$_POST["paises"];

echo "<h2>---FORMULARIO RESPUESTAS---</h2>";
for ($i=0;$i<count($paises);$i++)    
{     
echo "<br> - " . $paises[$i];    
}
?>