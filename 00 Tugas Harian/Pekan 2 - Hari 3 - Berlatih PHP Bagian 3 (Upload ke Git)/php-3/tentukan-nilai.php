<?php
function tentukan_nilai($number)
{
    //  kode disini
    if($number >= 85 && $number <= 100){
        return "Sangat Baik";
    }else if($number >= 70 && $number <= 85){
        return "Baik";
    }else if($number >= 60 && $number <= 70){
        return "Cukup";
    }else{
        return "Kurang";
    }
}

echo "<h2>Tentukan Nilai</h2>";

//TEST CASES
echo "Nilai 98 => " . tentukan_nilai(98) . "<br>"; //Sangat Baik
echo "Nilai 76 => " . tentukan_nilai(76) . "<br>"; //Baik
echo "Nilai 67 => " . tentukan_nilai(67) . "<br>"; //Cukup
echo "Nilai 43 => " . tentukan_nilai(43) . "<br>"; //Kurang
?>