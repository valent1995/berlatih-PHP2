<?php
function pasangan_terbesar($angka){
// kode di sini
    $num_string = strval($angka);
    $panjang = strlen($num_string);
    $max = intval($num_string[0].$num_string[1]);
    for ($i = 1; $i < $panjang-1; $i++) {
        if ($max < intval($num_string[$i].$num_string[$i+1])) {
        $max = intval($num_string[$i].$num_string[$i+1]);
        }
    }
    return $max;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>";
echo pasangan_terbesar(12783456); // 83
echo "<br>";
echo pasangan_terbesar(910233); // 91
echo "<br>";
echo pasangan_terbesar(71856421); // 85
echo "<br>";
echo pasangan_terbesar(79918293); // 99

?>