<?php


// import Database.php and UserManager.php files
require_once 'Database.php';
require_once 'UserManager.php';

// declare a new database connection
$dbObj = new Database();
// open database connection
$dbConnection = $dbObj->openConnection();
// declare a new user manager and pass the database connection
$userObj = new UserManager($dbConnection);
// fetch user list
$userList = $userObj->fetchAll();



?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
                <?php
                    $headerTitle = "USER'S TABLE";
                    require_once 'layout/header.php';
                ?>

                <a href="PageUserInsert.php" class="btn btn-primary">Insert New User</a>
 
                
                <div class="talbe-responsive">
                    <br>
                    <table class="table table-bordered table-striped">

                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Tools</th>
                        </tr>


                        <?php
                        foreach ($userList as $user) {
                            echo "<tr>";
                            echo "<td>" . $user['id'] . "</td>";
                            echo "<td>" . $user['first_name'] . "</td>";
                            echo "<td>" . $user['last_name'] . "</td>";
                            echo "<td>" . $user['gender'] . "</td>";
                            echo 
                            '<td> 

                            <a href="PageUserUpdate.php?id='.$user['id'].'" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>

                            <a href="PageUserDelete.php?id='.$user['id'].'" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            
                            </td>';
                            echo "</tr>";
                        }
                        ?>

                    </table>
                </div>

                <?php
                    require_once 'layout/footer.php';
                ?>
        </div>
    </div>
</div>


