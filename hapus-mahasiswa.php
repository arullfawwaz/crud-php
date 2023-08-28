<?php

include 'config/app.php';

// menerima di_mahasiswa yang dipilih pengguna
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

if (delete_mahasiswa($id_mahasiswa) > 0){
    echo"<script>
            alert('data Mahasiswa berhasil dihapus');
            document.location.href = 'mahasiswa.php';
          </script>";
} else  {
    echo"<script>
            alert('data Mahasiswa gagal dihapus');
            document.location.href = 'mahasiswa.php';
         </script>";
}
