<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database= new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])) {

    $nama=$_POST['nama'];
    $program_studi=$_POST['program_studi'];
    $nim=$_POST['nim'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $agama=$_POST['agama'];
    $alamat=$_POST['alamat'];
    $tempat_magang=$_POST['tempat_magang'];

    $mahasiswaController=new MahasiswaController($db);
    $result=$mahasiswaController->createMahasiswa($nama, $program_studi, $nim, $tempat_lahir, $jenis_kelamin, $agama, $alamat, $tempat_magang);

    if($result){
        header("location:mahasiswa");

    }else {
        header("location:tambahMahasiswa");
    }
}