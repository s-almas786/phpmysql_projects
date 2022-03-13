<?php include 'header.php';
include 'config.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="empId" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
<?php
if (isset($_POST['deletebtn'])) {
    $id =  $_POST['empId'];
    $sql = "DELETE FROM employees WHERE empId = $id";
    $result = mysqli_query($connec, $sql) or die("Querry Unsuccessful!");

    header("Location: http://localhost/employee_crud/index.php");

    mysqli_close($conec);
}
?>
</body>

</html>