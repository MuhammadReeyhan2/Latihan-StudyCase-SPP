<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:auth-login-petugas.php?pesan=gagal");
}
?>

<?php require('../template/header.php'); ?>

<?php require('../template/nav.php'); ?>

<?php require('../template/sidebar.php'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Kelas </h1>
        </div>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
            <title>Login &mdash; Stisla</title>

            <!-- General CSS Files -->
            <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

            <!-- CSS Libraries -->
            <link rel="stylesheet" href="../assets/modules/bootstrap-social/bootstrap-social.css">

            <!-- Template CSS -->
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="stylesheet" href="../assets/css/components.css">
            <!-- Start GA -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-94034622-3');
            </script>
            <!-- /END GA -->
        </head>

        <body>
            <div id="app">
                <section class="section">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">

                                <div class="card">
                                    <div class="card-header">
                                        <h3>Input Data Kelas</h3>
                                    </div>

                                    <div class="card-body">
                                        <form method="POST" action="action-create.php" class="needs-validation" novalidate="">
                                            <div class="form-group">
                                                <label for="IdKelas">IdK elas</label>
                                                <input id="IdKelas" type="IdKelas" class="form-control" name="IdKelas" tabindex="1" required autofocus>
                                                <div class="invalid-feedback">
                                                    Please fill in your Id Kelas
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="NamaKelas" class="control-label">Nama Kelas</label>
                                                <input id="NamaKelas" type="NamaKelas" class="form-control" name="NamaKelas" tabindex="2" required>
                                                <div class="invalid-feedback">
                                                    please fill in your Nama Kelas
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="KompetensiKeahlian" class="control-label">Kompetensi keahlian</label>
                                                <select name="KompetensiKeahlian" id="KompetensiKeahlian" aria-label="select" class="form-control" required>
                                                    <option selected value="Pilih kompetensi keahlian">Pilih kompetensi keahlian</option>
                                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                                    <option value="Teknik Audio Video">Teknik Audio Video</option>
                                                    <option value="Desain pemodelan Informasi bangunan">"Desain pemodelan Informasi bangunan</option>
                                                    <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                                    <option value="Teknik dan bisnis sepeda motor">Teknik dan bisnis sepeda motor</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    please fill in your kompetensi keahlian
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="simple-footer">
                                    Copyright &copy; Stisla 2018
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- General JS Scripts -->
            <script src="../assets/modules/jquery.min.js"></script>
            <script src="../assets/modules/popper.js"></script>
            <script src="../assets/modules/tooltip.js"></script>
            <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
            <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
            <script src="../assets/modules/moment.min.js"></script>
            <script src="../assets/js/stisla.js"></script>

            <!-- JS Libraies -->

            <!-- Page Specific JS File -->

            <!-- Template JS File -->
            <script src="../assets/js/scripts.js"></script>
            <script src="../assets/js/custom.js"></script>
        </body>

        </html>
    </section>
</div>

<?php require('../template/footer.php'); ?>