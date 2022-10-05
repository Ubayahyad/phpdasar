<?php 
// pertemuan 2 - Php Dasar
// sintaxs Php

// standar output
// echo, print
// print_r
// var_dump

// penulisan sintaks PHP
// 1.PHP di dalam HTML
// 2.HTML di dalam PHP
// variable dan tipe data
// variable
// tidak boleh di awali dengan angka ,tapi boleh ,mengandung angka

// operator
// aritamatika + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "ahyad";
// $nama_belakang = "ubay";
// echo $nama_depan . " " . $nama_belakang;

// assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $nama = "ahyad";
// $nama .= " ";
// $nama .= "ubay";
// echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump (1 == "1");
// identitas
// ===,!==
// var_dump (1 === "1");

// logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);


$nama = "ubay";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Halo, selamat datang <?php echo $nama; ?> </h1>
  
</body>
</html>