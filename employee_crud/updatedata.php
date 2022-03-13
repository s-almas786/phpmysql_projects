<?php

include("config.php");


$id = $_POST['empId'];
$name = $_POST['empName'];
$address = $_POST['empAddress'];
$department = $_POST['empDepartment'];
$phone = $_POST['empPhone'];

$sql = "UPDATE employees SET empName='{$name}', empAddress='{$address}', empDepartment='{$department}',empPhone='{$phone}' Where empId=$id";
$result = mysqli_query($connec, $sql) or die("Querry Unsuccessful");

header("Location: http://localhost/employee_crud/index.php");

mysqli_close($connec);
