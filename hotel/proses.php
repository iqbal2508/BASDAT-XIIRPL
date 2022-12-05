<?php 
    $nama = @$_POST['nama'];
    $alamat = @$_POST['alamat'];
    $checkIn = @$_POST['cek'];
    $kontak = @$_POST['kontak'];
    $tipe = @$_POST['tipe'];
    $bf = @$_POST['satu'];
    $fb = @$_POST['dua'];
    $files = $_FILES;
    $folder_upload = "./assets/uploads";
    
    if(!is_dir($folder_upload)){
        mkdir($folder_upload, 0777, $rekursif = true);
    }
    
    $fileFoto = (object) @$_FILES['foto'];

    $uploadFotoSukses = move_uploaded_file(
        $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
    );
    
    $totalBf = 100000 * $bf;
    $totalFB = 200000 * $fb;
    $totalAll = $tipe + $totalBf + $totalFB;
   
    echo "Nama Pemesanan Kamar : {$nama} <br>";
    echo "Alamat Pemesanan : {$alamat} <br>";
    echo "Tanggal Check In : {$checkIn} <br>";
    echo "No Handphone : {$kontak} <br>";
    echo "Harga Kamar ". number_format($tipe,0,',','.') ." <br>";
    echo "Lama Menginap Untuk Kamar tipe1 {$bf} Malam, Jadi harganya ". number_format($totalBf,0,',','.') ."<br>";
    echo "Lama Menginap Untuk Kamar tipe2 {$fb} Malam, Jadi harganya ". number_format($totalFB,0,',','.') ."<br>";
    echo "Total Harga ". number_format($totalAll,0,',','.') ."<br>";
    if($uploadFotoSukses){
        $link = "{$folder_upload}/{$fileFoto->name}";
        echo "Contoh kamar yang di pesan : <a href='{$link}'>{$fileFoto->name}</a>";
        echo "<br>";
    }
?>
<br>
<button>
    <a href="from.html">Kembali</a>
</button>
    </div>
</body>
</html>