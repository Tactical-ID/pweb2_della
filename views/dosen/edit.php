<?php
    include_once '../../config.php';
    include_once '../../controllers/DosenController.php';

    $database = new database();
    $db=$database->getKoneksi();

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $dosenController=new DosenController($db);
        $dosenData=$dosenController->getDosenById($id);

        if ($dosenData){
            if(isset($_POST['submit'])){
                $id=$_POST['id'];
                $nama=$_POST['nama'];
                $nidn=$_POST['nidn'];
                $alamat=$_POST['alamat'];
                $prodi=$_POST['prodi'];

                $result=$dosenController->updateDosen($id,$nama,$nidn,$alamat,$prodi);

                if($result){
                    header("location:dosen");
                }else {
                    header("location:editDosen");
                }

            }
        }
    }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PWEB2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  <body class="bg-light">
        <div class="container my-4">
            <h3 class="text-primary">Edit Data Dosen</h3>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $dosenData['id']?>">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $dosenData['nama']?>">
                </div>

                <div class="mb-3">
                    <label for="nidn class="form-label">NIDN</label>
                    <input type="text" class="form-control" name="nidn" value="<?php echo $dosenData['nidn']?>">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $dosenData['alamat']?>">
                </div>

                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input type="text" class="form-control" name="prodi" value="<?php echo $dosenData['prodi']?>">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="dosen" class="btn btn-danger">Kembali</a>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>  