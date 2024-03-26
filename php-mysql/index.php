<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One HRMS</title>
    <?php include_once('../php-mysql/partials/header.php'); ?>
</head>

<body>
    <?php include_once('../php-mysql/partials/navbar.php'); ?>
    <!-- side bar  -->
    <div class="d-flex">
        <?php include_once('../php-mysql/partials/sidebar.php'); ?>
        <!-- main -->
        <div class="container-fluid">
            <div class="row">
                <div class="col mt-3">
                    <h2 class="mb-3">Headline</h2>
                    <hr />
                    <a href="add-employee.php" class="btn btn-secondary btn-sm float-end mb-3">Add Employee</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Salary</th>
                                <th>Department</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once('database/Database.php');
                            require_once('model/Employee.php');

                            // $database = new OneHRMS\database\Database();
                            $db = OneHRMS\database\Database::connect();

                            $employee = new OneHRMS\model\Employee($db);
                            $result = ($employee->listAll());
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_object()) {
                                    echo "<tr>";
                                    echo "<td>" . $row->id . "</td>";
                                    echo "<td>" . $row->first_name . "</td>";
                                    echo "<td>" . $row->last_name . "</td>";
                                    echo "<td>" . $row->email . "</td>";
                                    echo "<td>" . $row->salary . "</td>";
                                    echo "<td>" . $row->department . "</td>";
                                    echo "<td class='text-end'>
                                    <a href='add-employee.php?id=" . $row->id . "'class='btn btn-warning btn-sm'>
                                    Edit
                                    </a>
                                    <a href='delete-employee.php?id=" . $row->id .  " 'class='btn btn-danger btn-sm' onclick= 'return confirmDelete()'>Delete</a>
                                     
                                     </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr>
                                <td colspan='7' class='text-center'>No records found!</td>
                                </tr>";
                            }
                            oneHRMS\database\Database::close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <?php include_once('../php-mysql/partials/footer.php'); ?>
</body>

</html>