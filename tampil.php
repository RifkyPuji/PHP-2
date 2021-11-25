<?php
    include './koneksi.php';
    echo "<a href='formulir.php'>Tambah Data</a>";

    $sql = "SELECT * FROM buku1";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "ID Buku : " . $baris[0] . "<br>";
        echo "Judul Buku : " . $baris[1] . "<br>";#
        echo "Penulis : " . $baris[2] . "<br>";
        echo "Jenis Buku : " . $baris[3] . "<br>";
        echo "Gambar Buku : " . $baris[4] . "<br>";
        echo "<a href='ubah_data.php?id_buku= $baris[0]'>ubah &nbsp</a>";
        echo "<a href='hapus.php?id_buku=$baris[0]'.Hapus</a>";
        $a++;
    }

    $conn->close();

?>