<?php
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2): void
{
    for ($i = 0; $i < $upper; $i++) {
        $passsword[] = chr(rand(65, 90));
    }
    for ($i = 0; $i < $lower; $i++) {
        $passsword[] = chr(rand(97, 122));
    }
    for ($i = 0; $i < $numeric; $i++) {
        $passsword[] = chr(rand(48, 57));
    }
    for ($i = 0; $i < $other; $i++) {
        $passsword[] = chr(rand(58, 64));
    }
    shuffle($passsword);
    echo implode('', $passsword);
}
rand_Pass();