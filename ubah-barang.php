<?php

$title = 'Ubah Barang';

include 'layout/header.php';

//mengambil data barang dari url
$id_barang = (INT)$_GET['id_barang'];

$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

// check apakah tombol ubah ditekan
if (isset($_POST['ubah'])){
    if (update_barang($_POST) > 0){
        echo"<script>
                alert('data barang berhasil diubah');
                document.location.href = 'index.php';
                </script>";
    } else  {
        echo"<script>
                alert('data barang gagal diubah');
                document.location.href = 'index.php';
                </script>";
    }
}

?>

<div class="container mt-3">
    <h1> <i class="fas fa-pencil-alt"></i> Ubah Barang</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama']; ?>" placeholder="Nama barang....." Required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $barang['jumlah']; ?>" placeholder="jumlah barang....."Required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>" placeholder="harga barang....."Required>
        </div>
        
        <button type="submit" name="ubah" class="btn btn-primary" style="float: right;"> Ubah</button>
</form>

    
</div>

<?php include 'layout/footer.php' ?>