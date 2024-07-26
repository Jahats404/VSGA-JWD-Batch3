<?php include("config/config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.0/css/buttons.dataTables.css">

    <?= include("assets/css.php") ?>
</head>

<body>
    <?php include("assets/navbar.php") ?>

    <div class="container content">
        <main>
            <h2 class="text-center mt-4">Daftar Beasiswa</h2>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Daftar Beasiswa
                        </div>
                        <div class="card-body">
                            <table id="example" class="display nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Berkas</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>NO HP</th>
                                        <th>Semester</th>
                                        <th>IPK</th>
                                        <th>Beasiswa</th>
                                        <th>Status Pengajuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = 'SELECT * FROM mahasiswa';
                                        $query = mysqli_query($conn, $sql);

                                        while ($mahasiswa = mysqli_fetch_assoc($query)) {
                                            echo "<tr>
                                                    <td><img src='assets/img/" . $mahasiswa["foto"] . "' alt='foto' width='50'></td>
                                                    <td>{$mahasiswa['nim']}</td>
                                                    <td>{$mahasiswa['nama']}</td>
                                                    <td>{$mahasiswa['email']}</td>
                                                    <td>{$mahasiswa['no_hp']}</td>
                                                    <td>{$mahasiswa['semester']}</td>
                                                    <td>{$mahasiswa['ipk']}</td>
                                                    <td>{$mahasiswa['beasiswa']}</td>
                                                    <td>{$mahasiswa['status_ajuan']}</td>
                                                </tr>";
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- <td><img src='assets/img/" . $mahasiswa["foto"] . "' alt='foto' width='50'></td> -->
    <!-- Footer -->
    <?php include("assets/footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.print.min.js"></script>

    <script>
    new DataTable('#example', {
        layout: {
            topStart: {
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            }
        }
    });
    </script>

</body>

</html>