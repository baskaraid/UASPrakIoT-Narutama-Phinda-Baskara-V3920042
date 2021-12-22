<?php
    error_reporting(0);
    include 'config.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $file = mysqli_query($conn, "SELECT username FROM test where id = '$id'");
    $hasil = mysqli_fetch_array($file);

    $query = "DELETE FROM test where id = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) 
    {
        die("Data gagal di tambahkan;". mysqli_errno($conn).mysqli_error($conn));
    } 
    else 
    {
        echo "<script>
                alert('Data Berhasil Dihapus !');
                window.location.href='index.php';
              </script>";
    }
}
?>