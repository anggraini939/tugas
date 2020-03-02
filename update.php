<?php
  include "koneksi.php";

  $Nama_Barang= $_POST["Nama_Barang"];
  $Tanggal= $_POST["Tanggal"];
  $Jumlah= $_POST["Jumlah"];
  $Keterangan= $_POST["Keterangan"];
  $id= $_POST["id"];

  // query sql
  $sql = "UPDATE inventory SET  Nama_Barang='$Nama_Barang',Tanggal='$Tanggal', Jumlah='$Jumlah' ,Keterangan='$Keterangan' 
  WHERE id='$id' ";


  $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 if($query){
    echo "<script>alert('Data berhasil di Update.');window.location='index.php';</script>";
  } else {
    echo "Error".$sql."<br>".mysqli_error($koneksi);
  }

  mysqli_close($koneksi);

?>