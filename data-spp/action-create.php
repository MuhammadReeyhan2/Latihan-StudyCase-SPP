<?php
if (isset($_POST['Submit'])) {
    $IdSpp = $_POST['IdSpp'];
    $Tahun = $_POST['Tahun'];
    $Nominal = $_POST['Nominal'];
    $Keterangan = $_POST['Keterangan'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "INSERT INTO spp(id_spp,tahun,nominal,keterangan) VALUES('$IdSpp','$Tahun','$Nominal','$Keterangan') ");

    if ($result) {
        echo "<script>alert ('Data spp berhasil ditambahkan'); window.location.href= 'read.php'</script>";
    } else {
        echo "<script>alert ('Data spp gagal ditambahkan'); window.location.href= 'read.php'</script>";
    }
}
