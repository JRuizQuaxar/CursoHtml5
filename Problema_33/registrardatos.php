<?php
$mail=$_POST["mail"];

echo "<h2>---FORMULARIO RESPUESTAS---</h2>";
for ($i=0;$i<count($mail);$i++)    
{     
echo "<br> - " . $mail[$i];    
}
?>