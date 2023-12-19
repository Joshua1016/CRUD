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



var_dump($_SERVER['REQUEST_METHOD']);

// FOR UPDATe
if(!empty($_POST['name']) && !empty($_POST['lname']) && !empty($_POST['gender']) && !empty($id)){
    $firstname = $_POST['name'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $success= $userObj->update($firstname, $lname, $gender, $id);
    if($success){
       echo "<script>alert ('Data Updated Successfully'); </script>";
       echo "<script>window.location.href='index.php'</script>";
    }else{
        echo "<script>alert ('No update happens, Please Update some info'); </script>";
    }
    //header('Location:index.php');
}


// fetch user 
$user = $userObj->fetchUser($id);

?>
<div class="container">
<?php
$headerTitle = 'Update '. $user['first_name'] ."'s ". $user['last_name'].' Information';
require_once 'layout/header.php';
?>

<form method="POST" action="">
    <div class="row">
        <div class="col-md-4">
          <b>First Name</b>
          <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $user['first_name'];?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <br>
          <b>Last Name</b>
         <input type="text" class="form-control" name="lname" placeholder="Name" value="<?php echo $user['last_name'];?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <br>
            <b>Gender</b>
            <select name="gender" class="form-control">
                
                <option value="Male" <?php echo $user['gender'] === 'Male'?'selected':''; ?>>Male</option>
                <option value="Female" <?php echo $user['gender'] === 'Female'?'selected':'';?>>Female</option>
            </select>
        </div>
    </div>

    <br>
    <button typ ="submit" class="btn btn-primary">Update</button>
    <a href="index.php" class="btn btn-danger">Back</a>

</form>




<?php
$firstname = $user['first_name'];

if($firstname == 'Lynol') 
echo '<h1> Hi Master '.$firstname.' Hello World</h1>';
?>
  

<?php
require_once 'layout/footer.php';
?>

</div>