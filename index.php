<?php 

  include 'connection.php';

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Library</title>
</head>
<body>  
  <div class="container mt-3">
    <a href="add.php" class="btn btn-primary btn-md mb-3">Tambah Data</a>
    <table class="table table-striped table-hover table-bordered">
    <thead class="table-dark">
      <th>ID</th>
      <th>Nama Buku</th>
      <th>Penerbit</th>
      <th>Jumlah</th>
      <th>Deskripsi</th>
      <th>Aksi</th>
    </thead>
    <?php 
      $sqlget = "SELECT * FROM buku";
      $query = mysqli_query($conn, $sqlget);
      while ($data = mysqli_fetch_array($query)) {
        echo "
        <tbody>
          <tr>
            <td>$data[id]</td>
            <td>$data[nama_buku]</td>
            <td>$data[penerbit]</td>
            <td>$data[jumlah]</td>
            <td>$data[deskripsi]</td>
            <td class='text-center'>
               <div class='d-flex justify-content-center gap-2'>
                  <a href='update.php?id={$data['id']}' class='btn btn-sm btn-warning px-3 btn-outline'>Update</a>
                  <a href='delete.php?id={$data['id']}' class='btn btn-sm btn-danger px-3 btn-outline '>Delete</a>
               </div>
            </td>
          </tr>
        </tbody>";        
        
        }
    ?>
  </table>
  </div>

  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>