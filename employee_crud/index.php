<?php
include 'header.php';
include 'config.php';

$sql = "SELECT * FROM employees JOIN department WHERE employees.empDepartment = department.deptId";

$result = mysqli_query($connec, $sql);

if (mysqli_num_rows($result) > 0) {

?>
    <div id="main-content">
        <h2>Employee List</h2>
        <table cellpadding="7px">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>

                        <td><?php echo $row['empId']; ?></td>
                        <td><?php echo $row['empName']; ?></td>
                        <td><?php echo $row['empAddress']; ?></td>
                        <td><?php echo $row['deptName']; ?></td>
                        <td><?php echo $row['empPhone']; ?></td>
                        <td>
                            <a href='edit.php?id=<?php echo $row['empId']; ?>'>Edit</a>
                            <a href='delete-inline.php?id=<?php echo $row['empId']; ?>'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {
    echo "<h2>Error! No record found</h2>";
}
    ?>
    </div>
    </div>
    </body>

    </html>