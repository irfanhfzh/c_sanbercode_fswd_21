<?php
require_once('animal.php');
require_once('Frog.php');
require_once('Ape.php');

echo "<h2>Release 0</h2>";

$sheep = new Animal("shaun");
    echo "Nama Binatang :  $sheep->name <br>"; // "shaun"
    echo "Mempunyai $sheep->legs kaki <br>"; // 2
    echo "Berdarah dingin : $sheep->cold_blooded <br>"; // tidak(false)

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

echo "<h2>Release 1</h2>";

$sungokong = new Ape("kera sakti");
    echo "Nama Binatang : $sungokong->name <br>";
    echo "Mempunyai $sungokong->legs kaki <br>";
    echo "Berdarah dingin : $sungokong->cold_blooded <br>";
    $sungokong->yell(); // "Auooo"

echo "<br><br>";

$frog = new Frog("buduk");
    echo "Nama Binatang : $frog->name <br>";
    echo "Mempunyai $frog->legs kaki <br>";
    echo "Berdarah dingin : $frog->cold_blooded <br>";
    $frog->jump(); // "hop hop"

