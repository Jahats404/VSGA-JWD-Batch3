<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?= include("assets/css.php") ?>
</head>

<body>
    <?php include("assets/navbar.php") ?>

    <div class="container content">
        <main>
            <h2 class="text-center mt-4 mb-3">Pilihan Beasiswa</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header">
                            Beasiswa KIPK
                        </div>
                        <div class="card-body">
                            <img src="assets/img/kip.png" class="card-img-top" alt="...">
                            <p class="card-text">Ini adalah program pemerintah Indonesia yang memberikan bantuan
                                finansial kepada mahasiswa dari keluarga kurang mampu untuk melanjutkan pendidikan di
                                perguruan tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header">
                            Beasiswa IOM
                        </div>
                        <div class="card-body">
                            <img src="assets/img/iom.jpg" class="card-img-top" alt="...">
                            <p class="card-text">Beasiswa IOM (International Organization for Migration) adalah jenis
                                beasiswa yang diberikan oleh Organisasi Internasional untuk Migrasi. Beasiswa ini
                                biasanya bertujuan untuk mendukung pendidikan dan pelatihan bagi individu yang terlibat
                                dalam isu migrasi atau yang berasal dari komunitas migran.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <?php include("assets/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>