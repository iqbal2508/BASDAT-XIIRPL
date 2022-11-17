<?php
// variabel lokal hanya bisa di akses dari scope dimana dai di definisiksn
$nama = " dan desain";
function halodunia(){
 $nama = "saya bisa ngoding";// variable lokal
    echo $nama;
}
halodunia();// panggil objek
echo $nama;
?>