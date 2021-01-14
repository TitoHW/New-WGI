<?php
    include 'connection.php';

    session_start();

    $no_id = $_POST["no_id"];
    $name = $_POST["name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $visit_date=$_POST["visit_date"];
    $tujuan=$_POST["tujuan"];
    $chck=$_POST['covid_form'];

    $sql = "insert into tabel_visitor (no_id,name,phone,email,visit_date,tujuan,covid_form) values ('$no_id','$name','$phone','$email','$visit_date','$tujuan','$chck')";

    $hasil = mysqli_query($kon,$sql);

    if($hasil){
        include "print.php";
        exit;
    } else {
        echo "Gagal koneksi";
        exit;
    }
?>