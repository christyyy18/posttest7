<?php
  require "../koneksi.php";

  $id = $_GET['id'];
  $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);

  if ($result) {
    echo "
        <script>
          alert('Data berhasil dihapus');
          document.location.href = '../halaman/dashboard.php';
        </script>
      ";
  } else {
    echo "
        <script>
          alert('Data gagal dihapus');
          document.location.href = '../halaman/dashboard.php';
        </script>
      ";
  }
?>