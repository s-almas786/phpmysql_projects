<?php include 'header.php';
include 'config.php'
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="empName" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="empAddress" />
        </div>
        <div class="form-group">
            <label>Department</label>
            <select name="empDepartment">
                <option value="" selected disabled>Select Class</option>
                <?php
                $sql = "SELECT * FROM department";
                $result = mysqli_query($connec, $sql) or die("Querry Unsuccessful!");

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <option value="<?php echo $row['deptId']; ?>"><?php echo $row['deptName']; ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="empPhone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>