<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database= new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])) {
    $nama=$_POST['nama'];
    $nidn=$_POST['nidn'];
    $alamat=$_POST['alamat'];
    $prodi=$_POST['prodi'];

    $dosenController=new DosenController($db);
    $result=$dosenController->createDosen($nama,$nidn,$alamat,$prodi);

    if($result){
        header("location:dosen");

    }else {
        header("location:tambahDosen");
    }
}