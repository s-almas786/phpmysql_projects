<?php

include("config.php");

$name = $_POST['empName'];
$address = $_POST['empAddress'];
$department = $_POST['empDepartment'];
$phone = $_POST['empPhone'];

$sql = "INSERT INTO employees(empName, empAddress, empDepartment, empPhone) VALUES ('{$name}', '{$address}', '{$department}','{$phone}')";
$result = mysqli_query($connec, $sql) or die("Querry Unsuccessful");

header("Location: http://localhost/employee_crud/index.php");

mysqli_close($connec);
