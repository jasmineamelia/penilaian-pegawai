<?php
if($_POST){
    $Namaa=$_POST['Nama'];
    $NIK=$_POST['NIK'];
    $Jenis_Kelamin=$_POST['Jenis_Kelamin'];
    $NO_tlp=$_POST['No_tlp'];
    $Alamat=$_POST['Alamat'];
    $Jabatan=$_POST['Jabatan'];
  

    if(empty($Nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (Nama, NIK, gender, No_tlp, Alamat, Jabatan) value ('".$Nama."','".$NIK."','".$Jenis_Kelamin."','".$No_tlp."','".$Alamat."','".$Jabatan."','".md5($password)."','".$id_pegawai."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='registrasi_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='registrasi_pegawai.php';</script>";
        }
    }
}
?>
