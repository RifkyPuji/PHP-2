<?php

    include './koneksi.php';

    $id = $_GET['id_buku'];

    $sql = "DELETE FROM buku WHERE id_buku ='$id'";

    if($conn->query($sql) === TRUE){
        echo "Data berhasil dihapus";
        echo "<a href='tampil.php'>Kembali</a>";
    }else {
        echo "Error: " . sql ."<br>" . $conn->error;
    }
    $conn->close();
?>