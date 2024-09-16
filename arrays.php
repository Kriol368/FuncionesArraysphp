<?php
$nombres = ["Pepe", "Manolo", "Maria"];
$cadena = implode(" ", $nombres);
echo count($nombres);
echo "<hr>";
echo $cadena;
echo "<hr>";
asort($nombres);
print_r($nombres);
echo "<hr>";
print_r(array_reverse($nombres));
echo "<hr>";
echo array_search("Pepe", $nombres);
echo "<hr>";
$alumnos = [["nombre" => "Pepe", "apellidos" => "Gonzalez"],["nombre" => "Manolo", "apellidos" => "Martinez"],["nombre" => "Maria", "apellidos" => "Garcia"]];
foreach ($alumnos as $alumno) {
    echo $alumno["nombre"] . " " . $alumno["apellidos"] . "<br>";
}
echo "<hr>";
$nombres = array_column($alumnos, 'nombre');
print_r($nombres);
echo "<hr>";
$numeros = [1,2,3,4,5,6,7,8,9,10];
echo array_sum($numeros);