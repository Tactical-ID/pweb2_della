<?php
include_once '../../models/Mahasiswa.php';

class MahasiswaController 
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Mahasiswa($db);
    }
    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();
    }
    public function createMahasiswa($nama,$program_studi,$nim,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tempat_magang){
        return $this->model->createMahasiswa ($nama,$program_studi,$nim,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tempat_magang);
    }
    public function getMahasiswaById($id)
    {
        return $this->model->getMahasiswaById($id);
    }
    public function updateMahasiswa($id,$nama,$program_studi,$nim,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tempat_magang)
    {
        return $this->model->updateMahasiswa($id,$nama,$program_studi,$nim,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tempat_magang);
    }
    public function deleteMahasiswa($id)
    {
        return $this->model->deleteMahasiswa($id);
    }
}