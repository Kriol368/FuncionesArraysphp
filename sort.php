<?php
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
ksort($edades);
print_r($edades);
echo "<br>";
asort($edades);
print_r($edades);
echo "<br>";
krsort($edades);
print_r($edades);
echo "<br>";
arsort($edades);
print_r($edades);
echo "<br>";