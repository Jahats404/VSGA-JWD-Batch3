<?php 

    include("../config/config.php");

    if (isset($_POST)) {
        var_dump($_POST);
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $semester = $_POST['semester'];
        $ipk = $_POST['ipk'];
        $beasiswa = $_POST['beasiswa'];
        $status = 'Belum di verifikasi';

        // Mengambil informasi file
        $foto = $_FILES['foto']['name'];
        $fotoName = $_FILES['foto']['name'];
        $fotoTmpName = $_FILES['foto']['tmp_name'];
        $fotoSize = $_FILES['foto']['size'];
        $fotoError = $_FILES['foto']['error'];
        $fotoType = $_FILES['foto']['type'];

        // Memeriksa apakah ada kesalahan dalam pengunggahan
        if ($fotoError === 0) {
            // Mengatur nama file yang akan disimpan
            $fotoDestination = '../assets/img/' . $fotoName;
            // Memindahkan file ke direktori tujuan
            if (move_uploaded_file($fotoTmpName, $fotoDestination)) {
                echo "File berhasil diunggah!";
                // Anda bisa menyimpan informasi lainnya ke database di sini
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "Terjadi kesalahan saat mengunggah file.";
        }

        $query = "INSERT INTO mahasiswa (nim, nama, email, no_hp, semester, ipk, beasiswa, foto, status_ajuan) VALUES (
            '$nim', '$nama', '$email', '$no_hp', '$semester', '$ipk', '$beasiswa', '$foto', '$status'
        )";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header('location:../index.php?status=success');
        } else {
            header('location:../daftar.php?status=failed');
        }
    } else{
        die("akses dilarang");
    }

?>