<?php
//array asosiatif
$siswa=[
    "Nama" => "Nayla Azkiya",
    "Kelas" => 11,
    "Alamat" => [
        "desa" => "Tanjungrejo",
        "kec" =>"Kebonsari",
        "kab" =>"Madiun"
    ]

    ];

echo $siswa["Nama"].PHP_EOL;
echo $siswa["Kelas"].PHP_EOL;
echo $siswa["Alamat"]["desa"].PHP_EOL;
echo $siswa["Alamat"]["kec"].PHP_EOL;
echo $siswa["Alamat"]["kab"].PHP_EOL;
?>