<?php
function tukar_besar_kecil($string){
//kode di sini
$arrStr = str_split($string);
$upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$output = "";

foreach ($arrStr as $key => $char) {
    if(strpos($upper_case, $char))
    {
        $output .= strtolower($char);
    }
    else
    {
        $output .= strtoupper($char);
    }
}
return $output;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
echo "<br>";

?>