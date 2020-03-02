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
        $sql = "SELECT * FROM barang WHERE id='$nama'";
  $query = mysqli_query($koneksi, $sql) or die (mysqli_error());  
	if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_array($query);
        }
?>

<form action="update2.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $data["id"];?>">
 <table align="center" class="table1">
  <tr>
          <td>Kode 
            :<br> <input type="text" class="kotak" name="kode" value="<?php echo $data["kode"];?>">
          </td>
        </tr>
        <tr>
          <td>Nama Barang 
            :<br> <input type="text" class="kotak" name="Nama_Barang" value="<?php echo $data["Nama_Barang"];?>">
          </td>
        </tr>
        
          <td><br>
            <input type="submit" class="tbl" name="edit" value="Edit">
            <a href="barang.php" style="text-decoration:none" class="tbl" title="Close">Batal
          </td>
        </tr>
      </table>
      
  </body>
  </html>