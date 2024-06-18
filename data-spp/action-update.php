<?php
if (isset($_POST['Submit'])) {
    $IdSpp = $_POST['IdSpp'];
    $Tahun = $_POST['Tahun'];
    $Nominal = $_POST['Nominal'];
    $Keterangan = $_POST['Keterangan'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "UPDATE spp SET tahun='$Tahun', nominal='$Nominal', keterangan='$Keterangan' WHERE id_spp='$IdSpp' ");

    if ($result) {
        echo "<script>alert ('Data spp berhasil diupdate'); window.location.href= 'read.php'</script>";
    } else {
        echo "<script>alert ('Data spp gagal diupdate'); window.location.href= 'read.php'</script>";
    }
}
