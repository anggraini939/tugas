<html>
<head>
  <title>Daftar Inventory Barang</title>
  <link rel="stylesheet" href="css/css1.css">
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
        <h2>INVENTORY BARANG</h2>
        <center><header>
  </header></center>




            <div id="button"><a href="#popup"><b>+</b> Tambah Data</a></div>
 <form method="post" class="ff">
  <input class="search" type="text" name="search" placeholder="Departement">  
  <input class="button" type="submit" name="submit" value="search">    
  </form>
            
            <div id="popup">
      <div class="window">


          <a href="#.php" class="close-button" title="Close"><b>x</b></a>
            <h2>Tambah Data Barang</h2>


        <form action="" method="POST">
        <table align="center" class="table1">
        <tr>
          <td>Departement :
             <br><input type="text" class="kotak" name="Departement" value="" required>
          </td>
        </tr>
        <tr>
          <td>Nama Barang 
            : <br>
            <select name="Nama_Barang" class="kotak">
              <?php
              $koneksi = mysqli_connect("localhost","root","","inventory");
            $result = mysqli_query($koneksi,"SELECT * FROM barang ORDER BY Nama_Barang");
  while($row = mysqli_fetch_assoc($result))
   {
     echo "<option>$row[Nama_Barang]</option>";
    } 
?>
</select>

            
          </td>
        </tr>
        <tr>
          <td>Tanggal
            :<br> <input type="date" class="kotak" name="Tanggal" value="" required>
          </td>
        </tr>
        <tr>
          <td>Jumlah
            : <br><input type="text" class="kotak" name="Jumlah" value="" required>
          </td>
        </tr>
        <tr>
          <td>Keterangan
            :<br> <br><input type="radio" name="Keterangan" value="Baik" checked>Baik /
              <input type="radio" name="Keterangan" value="Rusak">Rusak
          </td>
        </tr>
        <tr>
          <td>
            <button name="nt" class='tbl' vallue='edit'>Simpan</button>
          </td>
        </tr>

      </table></h3>
    </form><br>
    
    <?php
    if (isset($_POST['nt'])){
        include "koneksi.php";
        
        $Departement = $_POST['Departement'];
        $Nama_Barang = $_POST['Nama_Barang'];
        $Tanggal = $_POST['Tanggal'];
        $Jumlah = $_POST['Jumlah'];
        $Keterangan = $_POST['Keterangan'];
        
        $koneksi=new mysqli("localhost","root","","inventory");
        $koneksi->query("insert into inventory (Nama_Barang,Departement,Tanggal,Jumlah,Keterangan)
        values ('$Nama_Barang','$Departement','$Tanggal','$Jumlah','$Keterangan')");
        $tanda=$koneksi->affected_rows;
        echo"  ";
    }
?>

    

        </div>
    </div>
            <table align="center" border="0" class="table2">
          
            <th>Departement</th>
            <th>Nama Barang</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Action</th>


<?php
if(!ISSET($_POST['submit'])){
$sql = "SELECT * FROM inventory";
$query = mysqli_query($koneksi, $sql);
while ($d = mysqli_fetch_array($query)){
?>
<tr>
 <td><?php echo $d['Departement']; ?></td>
        <td><?php echo $d['Nama_Barang']; ?></td>
        <td><?php echo $d['Tanggal'];?></td>
        <td><?php echo $d['Jumlah'];?></td>
        <td><?php echo $d['Keterangan'];?></td>

        <td> <div class="tombol">
          <a href="edit.php?edit=<?php echo $d['id']; ?>">EDIT</a>
          <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
      </tr>
</tr>
<?php } } ?>


<?php if (ISSET($_POST['submit'])){
 $search = $_POST['search'];
 $query2 = "SELECT * FROM inventory WHERE Departement LIKE '%$search%'";
 $sql = mysqli_query($koneksi, $query2);
 while ($r = mysqli_fetch_array($sql)){
  ?>
<tr>
 <td><?php echo $r['Departement']; ?></td>
        <td><?php echo $r['Nama_Barang']; ?></td>
        <td><?php echo $r['Tanggal'];?></td>
        <td><?php echo $r['Jumlah'];?></td>
        <td><?php echo $r['Keterangan'];?></td>

        <td> <div class="tombol">
          <a href="edit.php?edit=<?php echo $r['id']; ?>">EDIT</a>
          <a href="hapus.php?id=<?php echo $r['id']; ?>">HAPUS</a>
        </td>
</tr>  
 <?php }} ?>


          
 
  

      </table>
    
</body>
</html>