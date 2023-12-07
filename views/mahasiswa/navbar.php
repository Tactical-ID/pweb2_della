<?php
  //memanggil class model db
  include_once '../../config.php';
  include_once '../../controllers/MahasiswaController.php';
  require '../../navbar.php';
  //instansiasi class db
  $database=new database;
  $db=$database->getKoneksi();

  $mahasiswaController=new MahasiswaController($db);
  $mahasiswa=$mahasiswaController->getAllMahasiswa();
?>

<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Mahasiswa</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
          body {
              background-color: #f0faff;
          }

          h3 {
              color: #007bff;
          }

          .btn-primary {
              background-color: #007bff;
              border-color: #007bff;
          }

          .btn-primary:hover {
              background-color: #0056b3;
              border-color: #0056b3;
          }

          .table {
              background-color: #ffffff;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
              color: #000;
          }

          th,
          td {
              border-color: #007bff !important;
          }

          th {
              background-color: #007bff;
              color: #fff;
          }

          .btn-warning,
          .btn-danger {
              color: #fff;
          }

          .btn-warning {
              background-color: #ffc107;
              border-color: #ffc107;
          }

          .btn-warning:hover {
              background-color: #e0a800;
              border-color: #e0a800;
          }

          .btn-danger {
              background-color: #dc3545;
              border-color: #dc3545;
          }

          .btn-danger:hover {
              background-color: #c82333;
              border-color: #c82333;
          }
      </style>
  </head>

  <body>
    <div class="px-3">
        <h3 class="mb-4">Data Mahasiswa</h3>
        <a href="tambahMahasiswa" class="btn btn-primary mb-2 at-2">Tambah Mahasiswa</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>NIM</th>
                    <th>Tempat Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Tempat Magang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $no=1;
                foreach ($mahasiswa as $x){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['program_studi'] ?></td>
                        <td><?php echo $x['nim'] ?></td>
                        <td><?php echo $x['tempat_lahir'] ?></td>
                        <td><?php echo $x['jenis_kelamin'] ?></td>
                        <td><?php echo $x['agama'] ?></td>
                        <td><?php echo $x['alamat'] ?></td>
                        <td><?php echo $x['tempat_magang'] ?></td>
                        <td>
                        <a href="editMahasiswa?id=<?php echo $x['id'];?>"class="btn btn-warning">Edit</a>
                        <a href="hapusMahasiswa?id=<?php echo $x['id'];?>"class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data di bawah ini..?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                } 
              ?>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      </div>
  </body>
</html>
