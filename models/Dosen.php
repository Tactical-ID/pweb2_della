<?php
class Dosen{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllDosen() {
        $query="SELECT * from dosen";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createDosen($nama, $nidn, $alamat, $prodi){
        $query="INSERT INTO dosen (nama,nidn,alamat,prodi) values('$nama', '$nidn', '$alamat', '$prodi')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else {
            return false;
        }
    }
    public function getDosenById($id)
    {
        $query="SELECT * from dosen where id=$id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updateDosen($id, $nama, $nidn, $alamat, $prodi)
    {
        $query="UPDATE dosen set nama='$nama', nidn='$nidn', alamat='$alamat', prodi='$prodi' where id='$id'";
        $result=mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }
    public function deleteDosen($id)
    {
        $query = "DELETE FROM dosen WHERE id=$id";
        $result=mysqli_query($this->koneksi,$query);
        if ($result)
        { return true;
        }else {
            return false;
        }
    }
}