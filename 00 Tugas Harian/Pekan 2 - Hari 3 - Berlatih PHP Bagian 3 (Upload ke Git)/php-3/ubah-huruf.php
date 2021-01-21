<?php
function ubah_huruf($string){
    //kode di sini
    $abjad = "abcdefghijklmnopqrstuvwxyz";
    $output= "bcdefghijklmnopqrstuvwxyza";

    for($i = 0; $i < strlen($string); $i++){
        $huruf_kecil = strpos($abjad, $string[$i]);
        if($huruf_kecil) {
            echo str_replace($abjad, $output, $string[$i]);
        }
    }
}

echo "<h2>Ubah Huruf</h2>";

// TEST CASES
echo ubah_huruf('wow') . "<br>"; // xpx
echo ubah_huruf('developer') . "<br>"; // efwfmpqfs
echo ubah_huruf('laravel') . "<br>"; // mbsbwfm
echo ubah_huruf('keren') . "<br>"; // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>