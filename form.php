<?php
    $koneksi=mysqli_connect("localhost","root","","smartvillage");
    if (isset($_POST['simpan'])){
        $nik=mysqli_real_escape_string($koneksi, $_POST['nik']);
        $nama_depan_penduduk=mysqli_real_escape_string($koneksi, $_POST['nama_depan_penduduk']);
        $nama_belakang_penduduk=mysqli_real_escape_string($koneksi, $_POST['nama_belakang_penduduk']);
        $tempat_lahir=mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
        $tanggal_lahir=mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
        $status_perkawinan=mysqli_real_escape_string($koneksi, $_POST['status_perkawinan']);
        $pekerjaan=mysqli_real_escape_string($koneksi, $_POST['pekerjaan']); 
        $kewarganegaraan=mysqli_real_escape_string($koneksi, $_POST['kewarganegaraan']);
        $agama=mysqli_real_escape_string($koneksi, $_POST['agama']);
        $gender=mysqli_real_escape_string($koneksi, $_POST['gender']);
        $usia=mysqli_real_escape_string($koneksi, $_POST['usia']);
        $simpan=mysqli_query($koneksi, "INSERT INTO data_statistik_penduduk VALUES('$nik','$nama_depan_penduduk','$nama_belakang_penduduk','$tempat_lahir','$tanggal_lahir','$status_perkawinan','$pekerjaan','$kewarganegaraan','$agama','$gender','$usia')");

        if ($simpan) {
            echo "<script>window.alert('Data berhasil disimpan'); window.location='/smartvillage/index.php';</script>";
        } else {
            echo "<script>window.alert('Data Gagal disimpan'); window.location='/smartvillage/index.php';</script>";
        }
        
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-image: url("img/portofolio/p4.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: transparent;
    box-shadow: 0 0 0px rgba(0, 0, 0, 0.1);
    border-radius: 20   px;
}

h1 {
    color: #32be8f;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
    padding-right: 20px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.gender-group {
    display: flex;
    gap: 20px;
    margin-top: 10px;
}

.gender-group label {
    font-weight: normal;
    margin-bottom: 0;
}

.register-button {
    background-color: #007BFF;
    color: #fff;
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
}

.register-button:hover {
    background-color: #0056b3;
}

.container form {
    margin-top: 20px;
}

.container form input[type="date"] {
    font-size: 16px;
}

.gender-group label {
    display: flex;
    align-items: center;
}

.gender-group input[type="radio"] {
    margin-right: 5px;
}
.img{
    display: flex;
	justify-content: flex-end;
	align-items: center;
    height: 260px;
}
.img img{
	width: 500px;
    height: 300px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Pendaftaran</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="number" id="nik" name="nik" required>
            </div>
            <div class="form-group">
                <label for="nama_depan_penduduk">Nama Depan:</label>
                <input type="text" id="nama_depan_penduduk" name="nama_depan_penduduk" required>
            </div>
            <div class="form-group">
                <label for="nama_belakang_penduduk">Nama Belakang:</label>
                <input type="text" id="nama_belakang_penduduk" name="nama_belakang_penduduk" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label>Status Perkawinan:</label>
                <div class="gender-group">
                    <label for="menikah">Menikah</label>
                    <input type="radio" id="menikah" name="status_perkawinan" value="Menikah" required>
                    <label for="belum">Belum Menikah</label>
                    <input type="radio" id="belum" name="status_perkawinan" value="Belum Menikah" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan:</label>
                <input type="text" id="kewarganegaraan" name="kewarganegaraan" required>
            </div>
            <div class="form-group">
                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="gender-group">
                    <label for="laki">Laki Laki</label>
                    <input type="radio" id="gender" name="gender" value="Laki-Laki" required>
                    <label for="perempuan">Perempuan</label>
                    <input type="radio" id="perempuan" name="gender" value="Perempuan" required>
                </div>
            </div>
            <div class="form-group">
                <label for="usia">Usia:</label>
                <input type="number" id="usia" name="usia" required>
            </div>
            <div class="form-group">
                <input type="submit" class="register-button" name="simpan" value="Daftar">
            </div>
        </form>
    </div>
</body>
</html>
