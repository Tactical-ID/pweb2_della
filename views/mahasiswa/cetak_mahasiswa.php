<?php
    //memanggil class model db
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';
    require '../../navbar.php';
    //instansiasi class db
    $database=new database;
    $db=$database->getKoneksi();

    $mahasiswaController=new MahasiswaController($db);
    $mahasiswa=$mahasiswaController->getAllMahasiswa();


    define('_MPDF_PATH','../mpdf/'); // Tentukan folder dimana anda menyimpan folder mpdf
    include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
    $mpdf=new mPDF('utf-8', 'A4-P', 11, 'arial'); // Membuat file mpdf baru

    //Memulai proses untuk menyimpan variabel php dan html
    ob_start();
    date_default_timezone_set('Asia/Jakarta');
    $tgl=date('d-m-Y');

    $nama_dokumen="Data-Mahasiswa-".$tgl;
?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>NIM</th>
                    <th>Tempat Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Tempat Magang</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $no=1;
                foreach ($mahasiswa as $x){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['program_studi'] ?></td>
                        <td><?php echo $x['nim'] ?></td>
                        <td><?php echo $x['tempat_lahir'] ?></td>
                        <td><?php echo $x['jenis_kelamin'] ?></td>
                        <td><?php echo $x['agama'] ?></td>
                        <td><?php echo $x['alamat'] ?></td>
                        <td><?php echo $x['tempat_magang'] ?></td>
                    </tr>
                    <?php
                } 
              ?>
        </table>
<?php
    $mpdf->setFooter('{PAGENO}');
    //penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf
    $html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
    ob_end_clean();
    //Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
    $mpdf->WriteHTML(utf8_encode($html));
    $mpdf->Output($nama_dokumen.".pdf" ,'I');
    exit;
?>
