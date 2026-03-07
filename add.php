<?php 
include 'connection.php';

if(isset($_POST['tambah'])) {
    $name = $_POST['name'];
    $penerbit = $_POST['penerbit'];
    $jumlah = $_POST['jumlah'];
    $descp = $_POST['descp'];
    
    $sqlInsert = "INSERT INTO buku(nama_buku, penerbit, jumlah, deskripsi)  
    VALUES ('$name', '$penerbit', '$jumlah', '$descp')";

    if(mysqli_query($conn, $sqlInsert)) {
        header("Location: index.php");  
        exit;
    } else {
        $error = mysqli_error($conn);
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
    <a href="index.php" class='btn btn-sm btn-warning px-3 btn-outline mb-3'>Kembali</a>
    <form action="add.php" method="post">
        <label for="name">Nama Buku</label>
        <input type="text" id="name" name="name" class="form-control" required>

        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit" class="form-control" required>

        <label for="jumlah">Jumlah</label>
        <input type="text" id="jumlah" name="jumlah" class="form-control" required>

        <label for="descp">Deskripsi</label>
        <input type="text" id="descp" name="descp" class="form-control" required>

        <input class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">
    </form>
</div>

<?php

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>