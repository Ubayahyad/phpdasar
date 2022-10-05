<?php 
$mahasiswa = [
  ["ahyad", "056095", "tkj", "ahyadubay@gmail.com"],
  ["ubay", "0439795", "tkj", "ubayahyad@gmail.com"],
  ["dillah", "5029858", "tkj", "dillahahyad@gmail.com" ]

];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAFTAR MAHASISWA</title>
</head>
<body>
  <h1>daftar mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>

  <ul> 
    <li>nama :<?= $mhs[0]; ?></li>
    <li>NRP :<?= $mhs[1]; ?></li>
    <li>Jurusan :<?= $mhs[2]; ?></li>
    <li>Email :<?= $mhs[3]; ?></li>
    
  </ul>

<?php endforeach; ?>

</body>
</html>