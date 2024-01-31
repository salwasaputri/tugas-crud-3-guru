<?php
include("config.php");
if(isset($_POST['aksi'])){
  if($_POST['aksi']=='add'){
  $nama_guru= $_POST['nama_guru'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $no_telepon = $_POST['no_telepon'];
  $email = $_POST['email'];
  $sql = "INSERT INTO daftar1 (nama_guru, jenis_kelamin, alamat, no_telepon, email) 
        VALUES ('$nama_guru', '$jenis_kelamin', '$alamat', '$no_telepon', '$email')";
  $query = mysqli_query($db,$sql);
  if($query){
    header('Location:index.php?status-sukses');
  }else{
    header('Location:index.php?status-gagal');
  }
    }else if($_POST['aksi']=='edit'){
  $id_guru = $_POST['id_guru'];
  $nama_guru= $_POST['nama_guru'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $no_telepon = $_POST['no_telepon'];
  $email = $_POST['email'];
  $sql ="UPDATE daftar1 SET nama_guru = '$nama_guru', jenis_kelamin = '$jenis_kelamin', alamat='$alamat', no_telepon = '$no_telepon', email = '$email' WHERE id_guru ='$id_guru'";
  $query = mysqli_query($db,$sql);
  if($query){
    header('Location:index.php?status-sukses');
  }else{
    header('Location:index.php?status-gagal');
  } 
}
}
if (isset ($_GET['hapus']) ){
    $id_guru = $_GET['hapus'];
    $sql = "DELETE FROM daftar1 WHERE id_guru='$id_guru';";
    $query = mysqli_query($db,$sql);
    if($query){
        header('Location:index.php?status-sukses');
      }else{
        header('Location:index.php?status-gagal');
      } 
} 
?>