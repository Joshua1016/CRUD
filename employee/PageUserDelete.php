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

// fetch id from url
$id = $_GET['id'];


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($id)){
        $fid = $_GET['id'];
        $success= $userObj->remove($id);
        if($success){
        echo "<script>alert ('Data Deleted Successfully'); </script>";
        echo "<script>window.location.href='index.php'</script>";
        }else{
            echo "<script>alert ('No update happens, Please Update some info'); </script>";
        }
    }
}