<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Registrasi pegawai</h3>
    <form action="proses_tambah_siswa.php" method="post">
        Nama 
        <input type="text" name="Nama" value="" class="form-control">
        NIK 
        <input name="NIK" class="form-control">
        Jenis Kelamin 
        <select name="Jenis_Kelamin" class="form-control">
        <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
         Nomor Telepon 
        <textarea name="No_tlp" class="form-control" rows="4"></textarea>
        Alamat 
        <textarea name="Alamat" class="form-control" rows="4"></textarea>
        Jabatan 
        <textarea name="Jabatan" class="form-control" rows="4"></textarea>
       
        Username 
        <input type="text" name="username" value="" class="form-control">
        Password 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah pegawai" class="btn btn-primary">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
