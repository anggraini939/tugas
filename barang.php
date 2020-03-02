<html>
<head>
  <title>Daftar Inventory Barang</title>
  <link rel="stylesheet" href="css/css3.css">
</head>
<body bgcolor="#eee">
<div id="conteudo1">
  <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="barang.php">Barang</a></li>
        
        </ul>
    </nav></div>

      <div id="conteudo">
        <h2>DATA BARANG</h2>
        <center><header>
  </header></center>



            <div id="button"><a href="#popup"><b>+</b> Tambah Barang</a></div>

            <div id="popup">
      <div class="window">


          <a href="#.php" class="close-button" title="Close"><b>x</b></a>
            <h2>Tambah Barang</h2>


        <form action="" method="POST">
        <table align="center" class="table1">
        <tr>
          <td>Kode :
             <br><input type="text" class="kotak" name="kode" value="" required>
          </td>
        </tr>
        <tr>
          <td>Nama Barang 
            : <br><input type="text" class="kotak" name="Nama_Barang" value="" required>
          </td>
        </tr>
          
        <tr>
          <td>
            <button name="submit" class='tbl' vallue='edit'>Simpan</button>
          </td>
        </tr>
      </table></h3>
    </form><br>

  <?php
    if (isset($_POST['submit'])){
        include "koneksi.php";
        
        $kode = $_POST['kode'];
        $Nama_Barang = $_POST['Nama_Barang'];
        
        $koneksi=new mysqli("localhost","root","","inventory");
        $koneksi->query("insert into barang (kode, Nama_Barang)
        values ('$kode','$Nama_Barang')");
        $tanda=$koneksi->affected_rows;
        echo"  ";
    }
?>
        </div>
    </div>
            <table align="center" border="0" class="table2">
          
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Action</th>

            <?php 
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"select * from barang");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        
        <td><?php echo $d['kode']; ?></td>
        <td><?php echo $d['Nama_Barang']; ?></td>

        <td> <div class="tombol">
          <a href="edit2.php?edit=<?php echo $d['id']; ?>">EDIT</a>
          <a href="hapus1.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
      </tr>
      <?php 
    }
    ?>

   

      </table>
    </form><br>
</body>
</html>