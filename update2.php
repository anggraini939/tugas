<?php
  include "koneksi.php";

  $kode = $_POST["kode"];
  $Nama_Barang = $_POST["Nama_Barang"];
  $id= $_POST["id"];

  // query sql
  $sql = "UPDATE barang SET kode='$kode', Nama_Barang='$Nama_Barang'
  WHERE id='$id' ";


  $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 if($query){
    echo "<script>alert('Data berhasil di Update.');window.location='index.php';</script>";
  } else {
    echo "Error".$sql."<br>".mysqli_error($koneksi);
  }

  mysqli_close($koneksi);

?>