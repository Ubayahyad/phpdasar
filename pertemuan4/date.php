<?php 
// date
// untuk menampilkan tanggal dengan format tertentu
//  echo date("l, d-M-Y");

//  time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970  
//  echo time( );
// echo date("d-M-Y", time()-60*60*24*100);



// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l",mktime(0,0,0,6,8,2004));

// strtotime
echo date("l", strtotime("6,jun,2004"));

?>