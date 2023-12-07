<?php
class Mahasiswa{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllMahasiswa() {
        $query="SELECT * from mahasiswa";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createMahasiswa($nama, $program_studi, $nim, $tempat_lahir, $jenis_kelamin, $agama, $alamat, $tempat_magang){
        $query="INSERT INTO mahasiswa (nama, program_studi, nim, tempat_lahir, jenis_kelamin, agama, alamat, tempat_magang) values('$nama', '$program_studi', '$nim', '$tempat_lahir', '$jenis_kelamin', '$agama', '$alamat', '$tempat_magang')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else {
            return false;
        }
    }
    public function getMahasiswaById($id)
    {
        $query="SELECT * from mahasiswa where id=$id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updateMahasiswa($id, $nama, $program_studi, $nim, $tempat_lahir, $jenis_kelamin, $agama, $alamat, $tempat_magang)
    {
        $query="UPDATE mahasiswa set nama='$nama', program_studi='$program_studi', nim='$nim', tempat_lahir='$tempat_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', tempat_magang='$tempat_magang' where id='$id'";
        $result=mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }
    public function deleteMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id=$id";
        $result=mysqli_query($this->koneksi,$query);
        if ($result)
        { return true;
        }else {
            return false;
        }
    }
}