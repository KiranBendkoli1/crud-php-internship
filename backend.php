<?php

require_once "db.php";


extract($_POST);
// $spassword = password_hash($password, PASSWORD_BCRYPT, array("cost"=>12));

$query = "SELECT * FROM employees where emp_id='$emp_id'";
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
        header("Location: display.php");
        // header("Location: display.php");
    }
    
}
else{
    
    $query = "UPDATE employees SET fname='$fname', lname='$lname',department='$department', designation='$designation', gender='$gender',mob_no='$mob_no',address='$address', email='$email' where emp_id=$emp_id";

    $resp = $mysqli->query($query);
    if($resp==1){
        echo "<script>alert('Employee record Updated Successfully');</script>";
        header("Location: display.php");
    }else{
        echo "<script>alert('Problem updating employees record');</script>";
        header("Location: display.php");
    }

}
?>