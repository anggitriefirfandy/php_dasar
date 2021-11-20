<?php

// ini adalah komentar(double slash untuk komentar sebaris)

/* ini adalah komentar( untuk beberapa baris) */ 




// pertemuan 2 php dasar

// standar output(untuk menampilkan ke layar)
// echo, print (untuk mencetak data, atau variabel)
// syntaks dibawah ini digunakan untuk debugging
// print_r (untuk menampilkan data array)
// var_dump (untuk melihat isi dari variabel nanti akan tampil informasi dari variabel tersebut)

// echo dan print untuk mencetak anggit rief irfandy ke web browser
//echo "anggit rief irfandy" ;
// print "teknik informatika";

// print_r untuk mencetak array dan bisa juga data biasa
// print_r ("anggit rief irfandy");

// var_dump untuk mencetak informasi dari variabel yaitu jenis variabelnya apa dan panjangnya berapa dan teksnya
// var_dump ("anggit rief irfandy");

// penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP


// variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// petik dua lebih sakti karena bisa interpolasi yaitu mengambil isi dari variabel
// petik satu tidak bisa interpolasi sehingga ketika kita ingin mengambil isi dari variabel tidak bisa
$nama = "anggit";

// echo "nama saya $nama"
// echo 'nama saya $nama'




// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;



// penggabungan string / concatenation / concat
// .
// $nama_depan = "anggit rief";
// $nama_belakang = "irfandy";
// echo $nama_depan . " " . $nama_belakang;


// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $nama = "anggit rief";
// $nama .= " ";
// $nama .= "irfandy";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 < 5);

// identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x > 10 && $x % 2 == 0)

?>

<html>
    <head>
        <meta charset-"UTF-8">
        <title>belajar php</title>
    </head>
    <body>
        <!-- contoh php di dalam HTML -->
        <h1>Halo, selamat datang <?php echo $nama; ?></h1>
        <p><?php echo "ini adalah paragraf" ?></p>
        <!-- contoh HTML di dalam PHP -->
        <?php
            echo "<h1>HAI";
        ?>
    </body>
</html>