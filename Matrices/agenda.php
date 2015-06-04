<?php

$agenda[0]['nombre']="liliana";
$agenda[0]['telefono']=3155141399;
$agenda[0]['email']="juana@hotmail.com";

$agenda[1]['nombre']="Andres";
$agenda[1]['telefono']=3123456722;
$agenda[1]['email']="andres@hotmail.com";

$agenda[2]['nombre']="Mariana";
$agenda[2]['telefono']=3155111169;
$agenda[2]['email']="mariaa@hotmail.com";

$agenda[3]['nombre']="luis";
$agenda[3]['telefono']=3133141399;
$agenda[3]['email']="luis@hotmail.com";

$agenda[4]['nombre']="juan";
$agenda[4]['telefono']=3123346722;
$agenda[4]['email']="juan@hotmail.com";

$agenda[5]['nombre']="David";
$agenda[5]['telefono']=3112111169;
$agenda[5]['email']="mariaa@hotmail.com";

echo $agenda[2]['nombre'];


for($i=0; $i<=5;$i++){
	echo '
<table border=1 width= 300px>
<tr>
<td>
    Nombre:
</td>
<td>'.$agenda[$i]['nombre'].'</td>
</tr>
<tr>
<td>
    Telefono:
</td>
<td>'.$agenda[$i]['telefono'].'</td>
</tr>
<tr>
<td>
    Email:
</td>
<td>'.$agenda[$i]['email'].'</td>
</tr>
';
}


?>