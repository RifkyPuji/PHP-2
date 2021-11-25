<?php
    include './koneksi.php';
    $id_buku = $_GET["id_buku"];

    $sql = "SELECT * FROM buku1 WHERE id=".$id_buku;
    $result = $conn->query($sql);

?>

<from action="ubah.php" method="post">
    <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>
        <tr>
            <td>ID Buku</td>
            <td>:</td>
            <td><input type="text" name="id_buku" value="<?php echo $result["id_buku"]?>"></td> 
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type="text" name="judul_buku" value="<?php echo $result["judul_buku"]?>"></td> 
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="penulis" value="<?php echo $result["penulis"]?>"></td> 
        </tr>
        <tr>
            <td>Jenis Buku</td>
            <td>:</td>
            <td><input type="text" name="jenis_buku" value="<?php echo $result["jenis_buku"]?>"></td> 
        </tr>
        <tr>
            <td>Gambar Buku</td>
            <td>:</td>
            <td><input type="file" name="gambar_buku" value="<?php echo $result["gambar_buku"]?>"></td> 
        </tr>
    </table>
    <input type="submit" name="simpan" value="UBAH">
</from>