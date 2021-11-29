<?php
// Pertemuan 2 - PHP dasar
// Sintaks PHP

// Standar Output
// echo,print
// print_r - utk output array
// var_dump utk output variable tapi bukan utk public

//Penulisan sintaks PHP
//1. PHP di dalam HTML
//2.HTML didalam PHP
//variable dan type data
//variable tidak boleh diawali dengan angka tapi boleh mengandungi angka

//operator
//aritmatika
//* + - % /
// $x = 10;
// $y = 20;
// echo 1+1;
// echo 2+3;
// echo true;
// echo $x * $y;

// Penggabung string / concatenation / concat
// .
// $nama_depan = "rizal";
// $nama_belakang = "riduan";
// echo $nama_depan . $nama_belakang;
// echo $nama_depan." ".$nama_belakang;

// Assigntment
// =, +=, -=, *=, /=, %=, .=

// $a = 1;
// $a -= 5;
// echo $a;

// $nama = "Rizal";
// $nama .= " ";
// $nama .= "Riduan";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
//var_dump (1 == "1");
//var_dump (1 < 5);

// Identitas
// ===, !== 
//var_dump (1 === "1");

//Logika
// &&, ||, !
// $y = 20;
// echo 1+1;
// echo 2+3;
// echo true;
// echo $x * $y;
// echo"Rizal";
// print"Rizal";
// print_r("rizal");
// var_dump("rizal");

$x = 30;

var_dump($x < 20 && $x % 2 == 0) 

?>

<?php
$nama = "Rizal";
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
    <h1>
        Salam, Rizal <?php echo "Selamat Datang";?>
    </h1>
    <p><?php echo $nama;?></p>
</body>
</html>


