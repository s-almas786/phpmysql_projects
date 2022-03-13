<?php include 'header.php';
include 'config.php';

?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM employees where empId = $id";

    $result = mysqli_query($connec, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="empId" value="<?php echo $row['empId']; ?>" />
                    <input type="text" name="empName" value="<?php echo $row['empName']; ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="empAddress" value="<?php echo $row['empAddress']; ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <?php
                    $sql_1 = "SELECT * FROM department";
                    $result_1 = mysqli_query($connec, $sql_1) or die("Querry Unsuccessful!");

                    if (mysqli_num_rows($result_1) > 0) {
                        echo "<select name='empDepartment'>";
                        while ($row_1 = mysqli_fetch_assoc($result_1)) {
                            if ($row['empDepartment'] == $row_1['deptId']) {
                                $select = "selected";
                            } else {
                                $select = "";
                            }

                            echo "<option {$select} value='{$row_1['deptId']}'>{$row_1['deptName']}</option>";
                        }
                        echo "</select>";
                    }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="empPhone" value="<?php echo $row['empPhone']; ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>
    <?php
        }
    }
    ?>
</div>
</div>
</body>

</html>