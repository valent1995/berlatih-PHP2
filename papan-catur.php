<?php

function papan_catur($angka) {
// tulis kode di sini
    $angka2 = $angka*2;
    for($i=1; $i<=$angka; $i++){
        for($j=1; $j<=$angka2-1; $j++){
            if(($i % 2 == 0 && $j % 2 == 0) || ($i % 2 == 1 && $j % 2 == 1)){
                echo "#";
            } else {
                echo "&nbsp";
            }
        }
    echo "<br>";
    }
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */
echo "<br>";

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "<br>";

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/