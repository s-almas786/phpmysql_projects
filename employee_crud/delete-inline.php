<?php

include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE empId = $id";
$result = mysqli_query($connec, $sql) or die("Querry Unsuccessful!");

header("Location: http://localhost/employee_crud/index.php");

mysqli_close($conec);
