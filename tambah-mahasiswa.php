<?php 

$title = 'Tambah Mahasiswa';

include 'layout/header.php';

// check apakah tombol tambah ditekan
if (isset($_POST['tambah'])){
    if (create_mahasiswa($_POST) > 0){
        echo"<script>
                alert('data mahasiswa berhasil ditambahkan');
                document.location.href = 'mahasiswa.php';
                </script>";
    } else  {
        echo"<script>
                alert('data mahasiswa gagal ditambahkan');
                document.location.href = 'mahasiswa.php';
                </script>";
    }
}

?>


<div class="container mt-5">
    <h1>Tambah mahasiswa</h1>
    <hr>
 
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama mahasiswa....." Required>
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label for="prodi" class="form-label">Program Studi</label>
                <select name="prodi" id="prodi" class="form-control" required>
                    <option value="">-- pilih prodi --</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Listrik">Teknik Listrik</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control" required>
                    <option value="">-- pilih jenis kelamin --</option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Telepon....." Required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email....." Required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" placeholder="foto mahasiswa.....">
        </div>
        
        <button type="submit" name="tambah" class="btn btn-primary" style="float: right;"> <i class="fas fa-plus"></i> Tambah</button>
</form>

</div>

<?php include 'layout/footer.php'; ?>