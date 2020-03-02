<html>
<head>
	<title>Edit Inventory Barang</title>
  <link rel="stylesheet" href="css/css2.css">
</head>
<body bgcolor="#eee">
      <div id="conteudo">
        <h2>INVENTORY BARANG</h2>
        <center><header>
  </header></center>
</head>

<?php
include'koneksi.php';

	$nama = $_GET["edit"];
        $sql = "SELECT * FROM inventory WHERE id='$nama'";
  $query = mysqli_query($koneksi, $sql) or die (mysqli_error());  
	if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_array($query);
        }
?>

<form action="update.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $data["id"];?>">
 <table align="center" class="table1">
  <tr>
          <td>Nama Barang 
            :<br> <input type="text" class="kotak" name="Nama_Barang" value="<?php echo $data["Nama_Barang"];?>">
          </td>
        </tr>
        <tr>
          <td>Departement
            : <br><input type="text" class="kotak" name="Departement" value="<?php echo $data["Departement"];?>" readonly>
          </td>
        </tr>
        <tr>
          <td>Tanggal
            :<br><input type="date" class="kotak" name="Tanggal" value="<?php echo $data["Tanggal"];?>">
          </td>
        </tr>
        <tr>
          <td>Jumlah
            :<br> <input type="text" class="kotak" name="Jumlah" value="<?php echo $data["Jumlah"];?>">
          </td>
        </tr>
        <tr>
          <td>Keterangan
            :<br> <input type="radio" name="Keterangan" value="Baik">Baik /
              <input type="radio" name="Keterangan" value="Rusak">Rusak<br>
          </td>
        </tr>
        <tr>
          <td><br>
            <input type="submit" class="tbl" name="edit" value="Edit">
            <a href="index.php" style="text-decoration:none" class="tbl" title="Close">Batal
          </td>
        </tr>
      </table>
      
  </body>
  </html>