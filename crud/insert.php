<?php

include "database.php";

$query = "INSERT INTO person VALUES ('','$_POST[name]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[usia]','$_POST[pendidikan]','$_POST[email]','$_POST[alamat]')";
$data = $con -> prepare($query); //persiapan query
$data -> execute();              //menjalankan query

if ($data){
    echo "<script>alert('Data Berhasil Di Simpan');window.location='form.php'</script>";
    }