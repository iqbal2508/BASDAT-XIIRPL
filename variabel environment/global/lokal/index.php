<?php
// variabel lokal hanya bisa di akses dari scope dimana dai di definisiksn
$nama = "reza kecap";
function halodunia(){
 $nama = " icikiwir";// variable lokal
    echo $nama;
}
halodunia();// panggil objek
echo $nama;
?>