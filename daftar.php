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
            <h2 class="text-center mt-4">Daftar Beasiswa</h2>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            Registrasi Beasiswa
                        </div>
                        <div class="card-body">
                            <form action="controller/tambah-beasiswa.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="number" class="form-control" name="nim" id="nim" min="1"
                                        onchange="tebakIpk()" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">Nomor HP</label>
                                    <input type="number" class="form-control" name="no_hp" id="no_hp" min="0" required>
                                </div>
                                <div class="mb-3">
                                    <label for="semester" class="form-label">Semester Saat Ini</label>
                                    <select class="form-select" aria-label="Default select example" name="semester"
                                        id="semester" required>
                                        <option selected value="">-- Pilih Semester --</option>
                                        <option value="1">1 (Satu)</option>
                                        <option value="2">2 (Dua)</option>
                                        <option value="3">3 (Tiga)</option>
                                        <option value="3">4 (Empat)</option>
                                        <option value="3">5 (Lima)</option>
                                        <option value="3">6 (Enam)</option>
                                        <option value="3">7 (Tujuh)</option>
                                        <option value="3">8 (Delapan)</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ipk" class="form-label">IPK Terakhir</label>
                                    <input type="number" class="form-control" name="ipk" id="ipk" required readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="beasiswa" class="form-label">Pilihan Beasiswa</label>
                                    <select class="form-select" aria-label="Default select example" id="pilihanBeasiswa"
                                        name="beasiswa" required disabled>
                                        <option selected value="">-- Pilih beasiswa --</option>
                                        <option value="KIPK">KIPK (Satu)</option>
                                        <option value="IOM">IOM (Satu)</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Upload Berkas syarat</label>
                                    <input type="file" class="form-control" name="foto" id="uploadBerkas" disabled
                                        accept=".jpg,.png,.pdf,.zip">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-warning">Batal</button>
                                    <button type="submit" id="simpanButton" class="btn btn-primary"
                                        disabled>Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <?php include("assets/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // Membuat objek dengan nilai yang ditetapkan
    const ipkValues = {};
    for (let i = 1; i <= 9; i++) {
        ipkValues[i] = 2.5 + (i - 1) * 0.1;
    }
    ipkValues[0] = 4; // Nilai IPK untuk digit terakhir 0

    function tebakIpk() {
        var nim = document.getElementById('nim').value;
        const lastDigit = parseInt(nim[nim.length - 1]);

        if (lastDigit >= 0 && lastDigit <= 9) {
            var ipk = ipkValues[lastDigit];
            document.getElementById('ipk').value = ipk;
            if (ipk >= 3) {
                document.getElementById('pilihanBeasiswa').disabled = false;
                document.getElementById('uploadBerkas').disabled = false;
                document.getElementById('simpanButton').disabled = false;
            } else {
                document.getElementById('pilihanBeasiswa').disabled = true;
                document.getElementById('uploadBerkas').disabled = true;
                document.getElementById('simpanButton').disabled = true;
            }
        } else {
            document.getElementById('pilihanBeasiswa').disabled = true;
            document.getElementById('uploadBerkas').disabled = true;
            document.getElementById('simpanButton').disabled = true;
        }
    }
    </script>
</body>

</html>