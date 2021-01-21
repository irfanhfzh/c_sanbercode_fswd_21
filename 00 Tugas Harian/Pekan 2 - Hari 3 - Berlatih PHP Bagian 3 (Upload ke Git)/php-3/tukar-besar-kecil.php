<?php
function tukar_besar_kecil($string){
    //kode di sini
    $abjad = "abcdefghijklmnopqrstuvwxyz";
    $output= "";

    for($i = 0; $i < strlen($string); $i++){
        $huruf_kecil = strpos($abjad, $string[$i]);
        if($huruf_kecil == null) {
            $output .= strtolower($string[$i]);
        }else {
            $output .= strtoupper($string[$i]);
        }
    }
    return $output . "<br>";
}

echo "<h2>Tukar Besar Kecil</h2>";

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>