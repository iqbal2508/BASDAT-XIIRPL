<?php 
    // global
    require 'global.php';

    // statis
    function statis(){
        static $var = " saya adalah Siswa Kelas XII RPL";
        echo $var;
        $var++;
    }
    statis();

    // lokal
    $skil = " Desain";
    function lokal(){
        $skil = " saya bisa coding dan";
        echo $skil;
    }
    lokal();
    echo $skil;

?>