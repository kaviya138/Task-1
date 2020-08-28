<!DOCTYPE html>
<html>
<body>
<?php 
$page = mysqli_connect("localhost", "root", "", "test");
if($page === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($page, $_POST['username']);
    $email = mysqli_real_escape_string($page, $_POST['Email']);
	$age=mysqli_real_escape_string($page, $_POST['Age']);
    $sql = "INSERT INTO mytable(username,email, age) VALUES ('$username','$email',$age)";
    if(mysqli_query($page, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($page);
    }
    mysqli_close($page);
?>
</body>
</html>