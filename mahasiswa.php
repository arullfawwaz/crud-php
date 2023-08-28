<?php 

$title = 'Daftar Mahasiswa';

include 'layout/header.php';



// menampilkan data mahasiswa
$data_mahasiswa = select("SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");

?>

<div class="container mt-5">
        <h1> <i class="fas fa-tasks"></i> Data Mahasiswa</h1>
        <hr>

        <a href="tambah-mahasiswa.php" class="btn btn-primary mb-1"> <i class="fas fa-plus-circle"></i> Tambah</a>

        <table class="table table-bordered table-striped mt-3" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>Prodi</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1;?>
                <?php foreach ($data_mahasiswa as $mahasiswa) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mahasiswa['nama']; ?></td>
                        <td><?= $mahasiswa['prodi']; ?></td>
                        <td><?= $mahasiswa['jk']; ?></td>
                        <td><?= $mahasiswa['telepon']; ?></td>
                        <td width="15%" class="text-center">
                            <a href="detail-mahasiswa.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa'] ;?>" class="btn btn-success btn-sm"> Detail</a>
                            <a href="ubah-mahasiswa.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa']; ?>" class="btn btn-primary btn-sm">  ubah</a>
                            <a href="hapus-mahasiswa.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa']; ?>" class="btn btn-secondary btn-sm" onclick="return confirm('Yakin Data Mahasiswa Akan Dihapus.');" > Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php include 'layout/footer.php'; ?>
