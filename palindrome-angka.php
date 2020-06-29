<?php

// tulis kode di sini
  /** 
  * PSEUDOCODE
  * 0. function menerima parameter angka integer, validasi dulu bahwa inputan parameter harus integer
  * 0.a. integer di-increment +1
  * 1. buat variabel $stringAngka = angka diubah jadi string (type casting)
  * 2. buat variabel $reversed = strrev($stringAngka)
  * 3. buat variabel boolean $isPalendrome = false pengecekan apakah angka yang sedang dilooping merupakan palindrome, kalo iya nanti diganti jadi True
  * 4. looping While (isPalendrome) kalo paindrome maka index terus increment +1
  * 5. looping akan berhenti ketika isPalindrome true, munculkan angka
  **/

function isPalindrome($string){
    return strrev($string) == $string;
}

function palindrome_angka($angka) {
    //validasi
    if(is_int($angka)==false) {
        echo "parameter bukan integer <br>";
        return null;
    }
    $angka++;
    
    while(isPalindrome("$angka")==false){
        $angka++;
    }
    
    return $angka;
}

// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>";
echo palindrome_angka(10); // 11
echo "<br>";
echo palindrome_angka(117); // 121
echo "<br>";
echo palindrome_angka(175); // 181
echo "<br>";
echo palindrome_angka(1000); // 1001

?>