<?php
echo "Masukkan Nama :";
$nama =trim (fgets(STDIN));
echo "Masukkan Nilai Anda :";
$Nilai =trim (fgets(STDIN));

if($Nilai>= 80){
    echo"Selamat $nama,  Anda Lulus👍";
}else{
    echo"Maaf $nama,  Anda Tidak Lulus😥";
}

?>