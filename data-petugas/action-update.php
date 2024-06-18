<?php
if (isset($_POST['Submit'])) {
    $IdPetugas = $_POST['IdPetugas'];
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);
    $NamaPetugas = $_POST['NamaPetugas'];
    $Level = $_POST['Level'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "UPDATE petugas SET username='$Username', password='$Password', nama_petugas='$NamaPetugas', level='$Level'   WHERE id_petugas='$IdPetugas' ");

    if ($result) {
        echo "<script>alert ('Data petugas berhasil diupdate'); window.location.href= 'read.php'</script>";
    } else {
        echo "<script>alert ('Data petugas gagal diupdate'); window.location.href= 'read.php'</script>";
    }
}
