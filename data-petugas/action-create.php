<?php
if (isset($_POST['Submit'])) {
    $IdPetugas = $_POST['IdPetugas'];
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);
    $NamaPetugas = $_POST['NamaPetugas'];
    $Level = $_POST['Level'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "INSERT INTO petugas(id_petugas,username,password,nama_petugas,level) VALUES('$IdPetugas','$Username','$Password','$NamaPetugas','$Level') ");

    if ($result) {
        echo "<script>alert ('Data Petugas berhasil ditambahkan'); window.location.href= 'read.php'</script>";
    } else {
        echo "<script>alert ('Data Petugas gagal ditambahkan'); window.location.href= 'read.php'</script>";
    }
}
