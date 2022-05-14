<?php 
  $baglanti = mysqli_connect('localhost', 'root', '', 'x-TR-a-12');
  $baglanti->set_charset("utf8");

  
  if (!$baglanti) { 
      die('Hata: ' . mysqli_connect_error()); 
  }else{
      echo "";
  }
?>