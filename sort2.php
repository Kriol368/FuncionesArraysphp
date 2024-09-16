<?php
$temperaturas = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
$dias = count($temperaturas);
$media = array_sum($temperaturas) / $dias;
print_r($media);
echo "<br>";
rsort($temperaturas);
for ($i = 0; $i < 5; $i++) {
    echo $temperaturas[$i] . " ";
}
echo "<br>";
sort($temperaturas);
for ($i = 0; $i < 5; $i++) {
    echo $temperaturas[$i] . " ";
}