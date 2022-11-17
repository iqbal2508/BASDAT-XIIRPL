<?php 
//statis adalah mempertahankan nlai aslinya 

function test(){
   $teks = "Saya Adalah Siswa XII RPL"; //mendefinisikan variabel
    // variabel lokal jika sudah melewati scopenya akan kembali ke nilai awal
    //static mempertahankan nilainya diluar scope
    echo  "{$teks} <br> ";
    $teks++; //menambahkan fungsi increment
}

test();

?>