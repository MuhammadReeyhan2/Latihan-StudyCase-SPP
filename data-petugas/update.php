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
            <h1>Update Data Petugas</h1>
        </div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data Petugas</p>
                        </div>
                        <?php
                        include "../koneksi.php";
                        $IdPetugas = $_GET['id_petugas'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas=$IdPetugas");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                            <form action="action-update.php" method="post">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="IdPetugas" class="form-label">Id Petugas</label>
                                        <input type="text" class="form-control" id="IdPetugas" name="IdPetugas" value="<?php echo $data['id_petugas']; ?>" readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Username" class="form-lab">Username</label>
                                        <input type="text" class="form-control" id="Username" name="Username" value="<?php echo $data['username']; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="Password" class="form-lab">Password</label>
                                        <input type="Password" class="form-control" id="Password" name="Password" value="<?php echo $data['password']; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="NamaPetugas" class="form-lab">Nama Petugas</label>
                                        <input type="text" class="form-control" id="NamaPetugas" name="NamaPetugas" value="<?php echo $data['nama_petugas']; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="Level" class="form-label">Level</label>
                                        <select name="Level" id="Level" aria-label="select" class="form-control">
                                            <option selected value="<?php echo $data['level']; ?>">
                                                <?php echo $data['level']; ?>
                                                <hr />
                                            </option>
                                            <option value="Admin">Admin</option>
                                            <option value="Petugas">Petugas</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require('../template/footer.php'); ?>