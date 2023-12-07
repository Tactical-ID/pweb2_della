<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PWEB2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
      color: #495057;
    }

    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }

    h3 {
      color: #007bff;
    }

    .btn-success {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-success:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>

<body>

<div class="container mt-5">
  <form action="proses_tambahDosen?aksi=tambah" method="post">
    <h3 class="mb-4">Tambah Data Dosen Pembimbing</h3>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="mb-3">
      <label for="nidn" class="form-label">NIDN</label>
      <input type="number" class="form-control" name="nidn">
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat">
    </div>
    <div class="mb-3">
      <label for="prodi" class="form-label">Program Studi</label>
      <input type="text" class="form-control" name="prodi">
    </div>

    <button type="submit" name="submit" class="btn btn-success" onclick="showAlert()">Simpan</button>
    <a href="dosen" class="btn btn-danger">Kembali</a>
  </form>
</div>

<script>
  function showAlert() {
    alert("Data dosen pembimbing berhasil ditambahkan!");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
