<?php 
// $mahasiswa = [
//   ["ahyad", "548363", "ahyadubay@gmail.com", "tkj"],
//   [ "92764363", "ubay", "ubayahyad@gmail.com", "tkj"],


// ];

// array associative
// definisinya sama seperti array numerik,kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
  [
        "nama" => "ahyad",
        "nrp" => "539867",
        "email" => "ahyadubay@gmail.com",
        "jurusan" => "tkj",
        "gambar" => "Batu.jpg"

  ],
  [
        "nama" => "ubay",
        "nrp" => "5529477",
        "email" => "ubayahyad@gmail.com",
        "jurusan" => "tkj",
        "gambar" => "th_clipdrop-background-removal.png"
  ]
];

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
  </head>
  <body>
    <h1>daftar mahasiswa</h1>
<?php foreach($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?php echo $mhs["gambar"]; ?> ">
      </li>
      <li>nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>email : <?= $mhs["email"]; ?></li>
      <li>jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
<?php endforeach; ?>
  </body>
  </html>
