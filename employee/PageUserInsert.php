<?php
// import Database.php and UserManager.php files
require_once 'Database.php';
require_once 'Generators.php';
require_once 'UserManager.php';


// declare a new database connection
$dbObj = new Database();
// open database connection
$dbConnection = $dbObj->openConnection();
// declare a new user manager and pass the database connection
$userObj = new UserManager($dbConnection);
$genObj = new Generators();



var_dump($_SERVER['REQUEST_METHOD']);

// execute only When the user try to send data to server
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['name']) && !empty($_POST['lname']) && !empty($_POST['gender'])){
        $firstname = $_POST['name'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $success= $userObj->insertData($firstname, $lname, $gender);
        if($success){
           echo "<script>alert ('Insert Successfully'); </script>";
           echo "<script>window.location.href='index.php'</script>";
        }else{
            echo "<script>alert ('Cant Insert Please double check fields'); </script>";
        }
    }else{
        echo 'Insufficient Data';
    }
}
?>
<div class="container">
<?php
$headerTitle = 'Insert New User';
require_once 'layout/header.php';
?>

<form method="POST" action="">
<div class="row">
        <div class="col-md-4">
          <b>ID Number</b>
          <input type="text" name="idnum" class="form-control" value="<?php echo $genObj->generateID();?>"disabled required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
          <b>First Name</b>
          <input type="text" name="name" class="form-control" placeholder="first name" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <br>
          <b>Last Name</b>
         <input type="text" class="form-control" name="lname" placeholder="last name" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <br>
            <b>Gender</b>
            <select name="gender" class="form-control">
                <option value="" disabled selected> -Select Gender - </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
    </div>

    <br>
    <button type ="submit" class="btn btn-primary">Insert</button>
    <a href="index.php" class="btn btn-danger">Back</a>

</form>


  

<?php
require_once 'layout/footer.php';
?>

</div>