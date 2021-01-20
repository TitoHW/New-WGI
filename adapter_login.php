<?php
$username   = $_POST['username'];
$pass       = md5($_POST['password']);

include 'connection.php';

$user = mysqli_query($kon,"select * from tabel_akun where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    header("location:index_admin.php");
}else
{
    header("location:login.php");
}
