<?php
include "database.php";

$query = "UPDATE person SET name = '$_POST[name]', tempat_lahir = '$_POST[tempat_lahir]', tanggal_lahir = '$_POST[tanggal_lahir]', usia = '$_POST[usia]', pendidikan = '$_POST[pendidikan]', email = '$_POST[email]', alamat = '$_POST[alamat]' WHERE id = '$_POST[id]'";
$data = $con -> prepare($query);
$data -> execute();

if ($data){
    echo "<script>alert('Data Berhasil Di Update');window.location='form.php'</script>";
    }