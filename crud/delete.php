<?php
include "database.php";

$query = "DELETE FROM person WHERE id = '$_GET[id]'";
$data = $con -> prepare($query);
$data -> execute();

header("location: form.php");