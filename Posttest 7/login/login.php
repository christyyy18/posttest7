<?php
require "koneksi.php";

session_start();

if (isset($_POST["login"])) {
  $username = strtolower($_POST["username"]);
  $pass = $_POST["password"];
  $role = $_POST["role"];

  // Ubah result disini
  $result = mysqli_query($koneksi, "SELECT * FROM users WHERE users = '$username'");
  
  // Ubah true disini
  if (mysqli_num_rows($result) === 1) {
    // Ubah row disini
    $row = mysqli_fetch_assoc($result);
    
    // Ubah true disini
    if (password_verify(
      $pass, $row['password']
    ) and 
    ($row['role'] == 'admin') and 
    ($row['role'] == $role)) {
      
      $_SESSION["akses"] = "admin";
      header("location: halaman/dashboard.php");
      exit;
      
    // Ubah true disini
    } else if ( password_verify(
      $pass, $row['password']
    ) and 
      ($row['role'] == 'user') and 
      ($row['role'] == $role)) {

      $_SESSION["akses"] = "user";
      header("location: user.php");
      exit;

    } else {
      echo "
        <script>
          alert('Username atau Password Anda Tidak Ada');
          document.location.href = 'login.php';
        </script>
      ";
    }
  } else {
    echo "
        <script>
          alert('Username atau Password Anda Salah');
          document.location.href = 'login.php';
        </script>
      ";
  }
}
?>