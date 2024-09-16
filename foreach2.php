<?php
$color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
echo "<ul>";
foreach ($color as $colors) {
    echo "<li><a href='$colors'>" . rtrim($colors,".html") . "</a></li>";
}
echo "</ul>";