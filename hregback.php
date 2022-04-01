<?php

require_once "db.php";


extract($_POST);
// $spassword = password_hash($password, PASSWORD_BCRYPT, array("cost"=>12));

$query = "SELECT * FROM dept_head where email='$email'";
$result = $mysqli->query($query);

$num_row = mysqli_num_rows($result);
if($num_row<1){
    $query = "INSERT INTO dept_head(name, department, email,password) VALUES('$name', '$department','$email','$password')";

    $resp = $mysqli->query($query);
    
    if($resp==1){
        echo "Record Added";
        header("Location: hdisplay.php");
    }else{
        echo "Problem Adding record";
        // header("Location: display.php");
    }
    
}
else{
    echo "Already Present";
    // header("Location: display.php");
}
?>