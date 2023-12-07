<?php
include_once '../../models/Dosen.php';

class DosenController 
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Dosen($db);
    }
    public function getAllDosen()
    {
        return $this->model->getAllDosen();
    }
    public function createDosen($nama,$nidn,$alamat,$prodi){
        return$this->model->createDosen ($nama,$nidn,$alamat,$prodi);
    }
    public function getDosenById($id)
    {
        return $this->model->getDosenById($id);
    }
    public function updateDosen($id,$nama,$nidn,$alamat,$prodi)
    {
        return $this->model->updateDosen($id,$nama,$nidn,$alamat,$prodi);
    }
    public function deleteDosen($id)
    {
        return $this->model->deleteDosen($id);
    }
}