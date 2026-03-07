<?php 
include 'connection.php';

$id = $_GET['id'];
$sqlget = "SELECT * FROM buku WHERE id='$id'";
$results = mysqli_query($conn, $sqlget);
$data = mysqli_fetch_array($results);

if(isset($_POST['update'])) {
    echo "Data Berhasil Masuk!<br>";
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $penerbit = $_POST['penerbit'];
    $jumlah = $_POST['jumlah'];
    $descp = $_POST['descp'];
    
    $sqlupdate = "UPDATE buku SET 
                  nama_buku='$name', 
                  penerbit='$penerbit', 
                  jumlah='$jumlah', 
                  deskripsi='$descp' 
                  WHERE id='$id'";
    
    
    if(mysqli_query($conn, $sqlupdate)) {
        header("Location: index.php");  
        exit;
    }
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Library</title>
</head>
<body>  

<div class="w-50 mx-auto border border-5 rounded 3 p-3 mt-5">
    <a href="index.php" class='btn btn-sm btn-warning px-3 btn-outline'>Kembali</a>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $data['id']?>">

        <label for="name">Nama Buku</label>
        <input type="text" id="name" name="name" value="<?php echo"$data[nama_buku]";?>" class="form-control" >

        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit" value="<?php echo"$data[penerbit]";?>" class="form-control" >

        <label for="jumlah">Jumlah</label>
        <input type="text" id="jumlah" name="jumlah" value="<?php echo"$data[jumlah]";?>" class="form-control" >

        <label for="descp">Deskripsi</label>
        <input type="text" id="descp" name="descp" value="<?php echo"$data[deskripsi]";?>" class="form-control" >

        <input class="btn btn-success mt-3" type="submit" name="update" value="Ubah Data">
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>