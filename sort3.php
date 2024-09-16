<?php
$productos = ["Escoba" => "Barre", "Jabon" => "Limpia", "Nevera" => "Enfria"];
uasort($productos, function ($a, $b) {
    return strlen($a) > strlen($b);
});
print_r($productos);