<?php

require_once "db.php";

$msg = '';
function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

extract($_POST);
// $spassword = password_hash($password, PASSWORD_BCRYPT, array("cost"=>12));

$query = "SELECT * FROM employees where email='$email'";
$result = $mysqli->query($query);

$num_row = mysqli_num_rows($result);
if($num_row<1){
    $query = "INSERT INTO employees(fname, lname,department,designation,gender, mob_no,address,email, password) VALUES('$fname', '$lname','$department', '$designation','$gender','$mob_no','$address','$email','$password')";
    $resp = $mysqli->query($query);
    
    if($resp==1){
        echo '<script>alert("Employee record Addreded Successfully");</script>';
        header("Location: display.php");
    }else{
        echo '<script>alert("Problem Adding record");</script>';
        // header("Location: display.php");
    }
    
}
else{
    echo '<script>alert("Already Present")</script>';
    // header("Location: display.php");
}
?>