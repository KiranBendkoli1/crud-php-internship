<?php

require_once "db.php";


extract($_POST);

$query = "INSERT INTO employees(fname, lname,designation,gender, mob_no,address,email, password) VALUES('$fname', '$lname', '$designation','$gender','$mob_no','$address','$email','$password')";

$resp = $mysqli->query($query);
if($resp==1){
    echo "Record Added";
}else{
    echo "Problem Adding record";
}

?>