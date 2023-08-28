<?php

$title = 'Daftar Barang';

include 'layout/header.php';

$data_barang = select("SELECT * FROM barang ORDER BY id_barang DESC");


?>
    <div class="container mt-5">
        <h1> <i class="fas fa-tasks"></i> Data Barang</h1>
        <hr>

        <a href="tambah-barang.php" class="btn btn-primary mb-1"> <i class="fas fa-plus-circle"></i> Tambah</a>

        <table class="table table-bordered table-striped mt-3" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>jumlah</th>
                    <th>harga</th>
                    <th>tanggal</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($data_barang as $barang) : ?>
                <tr>    
                <td><?= $no++; ?></td>
                <td><?= $barang['nama']; ?></td>
                <td><?= $barang['jumlah']; ?></td>
                <td>Rp. <?= number_format($barang['harga'],0,',','.'); ?></td>
                <td><?= date('d-m-Y|H:i:s',strtotime($barang['tanggal'])); ?></td>
                <td width="20%" class="text-center">
                    <a href="ubah-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i> ubah</a>
                    <a href="hapus-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-secondary" onclick="return confirm('Yakin Mau Menghapus Data Barang Ini ?');"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    
<?php include 'layout/footer.php';?>