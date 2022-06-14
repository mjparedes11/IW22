<?php 
$var1=1;
$var2=2;
$edad=2;
$res=0;
echo "hola mundo 1 :) <br>";
echo "hola mundo 2 :) <br>";
//exit();
echo "hola mundo 3 :)<br>";

if ($edad>=18) {
	echo "Ud es mayor de edad";
}else{
	echo "Ud es menor de edad";
}
for ($i=0; $i < 15; $i++) { 
	$ope=5*$i;
	echo "5 * ".$i." = ".$ope."<br>";
}
?>