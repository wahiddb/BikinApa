<?php
//mengkoneksikan database
   include('koneksi.php');
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
   
   //jika nilai session tidak ada pada tabel users, kembali ke login.php
   if(!isset($_SESSION['pelanggan'])){
      echo "<script>alert ('Silahkan login terlebih dahulu');</script>";
      echo "<script>location = 'login.php';</script>";
      die();
   }
?>