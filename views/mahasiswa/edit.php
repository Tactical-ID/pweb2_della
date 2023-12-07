<?php
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';

    $database = new database();
    $db = $database->getKoneksi();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $mahasiswaController = new MahasiswaController($db);
        $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

        if ($mahasiswaData) {
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $program_studi = $_POST['program_studi'];
                $nim = $_POST['nim'];
                $tempat_lahir = $_POST['tempat_lahir'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $agama = $_POST['agama'];
                $alamat = $_POST['alamat'];
                $tempat_magang = $_POST['tempat_magang'];

                $result = $mahasiswaController->updateMahasiswa($id, $nama, $program_studi, $nim, $tempat_lahir, $jenis_kelamin, $agama, $alamat, $tempat_magang);

                if ($result) {
                    header("location:mahasiswa");
                } else {
                    header("location:editMahasiswa");
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PWEB2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body class="bg-light">
        <div class="container my-4">
            <h3 class="text-primary">Edit Data Mahasiswa</h3>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="<?php echo $d ?>" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $mahasiswaData['id']?>">
                </div>

                <div class="mb-3">
                    <label for="<?php echo $d ?>" class="form-label">Nama Mahaiswa</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $mahasiswaData['nama']?>">
                </div>

                <div class="mb-3">
                    <label for="<?php echo $d ?>" class="form-label">Program Studi</label>
                    <input type="text" class="form-control" name="program_studi" value="<?php echo $mahasiswaData['program_studi']?>">
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="number" class="form-control" name="nim" value="<?php echo $mahasiswaData['nim']?>">
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $mahasiswaData['tempat_lahir']?>">
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $mahasiswaData['jenis_kelamin']?>">
                </div>

                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" name="agama" value="<?php echo $mahasiswaData['agama']?>">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $mahasiswaData['alamat']?>">
                </div>
                
                <div class="mb-3">
                    <label for="tempat_magang" class="form-label">Tempat Magang</label>
                    <input type="text" class="form-control" name="tempat_magang" value="<?php echo $mahasiswaData['tempat_magang']?>">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="mahasiswa" class="btn btn-danger">Kembali</a>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>