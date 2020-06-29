<?php
function ubah_huruf($string){
//kode di sini
    $alphabets = "abcdefghijklmnopqrstuvwxyz";

    $output = "";
    $arrStr = str_split($string);
    foreach($arrStr as $key => $char) {
        $pos = strpos($alphabets, $char);
        if($pos == "25") {
            $output .= substr($alphabets,0,1);
        }
        $output .= substr($alphabets, $pos + 1, 1);
    }
    return $output;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>". ubah_huruf('developer'); // efwfmpqfs
echo "<br>". ubah_huruf('laravel'); // mbsbwfm
echo "<br>". ubah_huruf('keren'); // lfsfo
echo "<br>". ubah_huruf('semangat'); // tfnbohbu

?>