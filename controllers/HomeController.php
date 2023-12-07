<?php
class HomeController
{
    public function home (){
        header("location:http://localhost/PROJECT/PWEB2/PWEB2/jobsheet5/index.php");

    } public function mahasiswa (){
        header("location:http://localhost/PROJECT/PWEB2/PWEB2/jobsheet5/views/mahasiswa/index.php");
    }
    public function dosen (){
        header("location:http://localhost/PROJECT/PWEB2/PWEB2/jobsheet5/views/dosen/index.php");
    }
}