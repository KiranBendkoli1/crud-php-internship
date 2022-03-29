<?php
    require_once 'db.php';

    extract($_POST);
    
    $query = "UPDATE employees SET fname='$fname', lname='$lname', designation='$designation', gender='$gender',mob_no='$mob_no',address='$address', email='$email' where emp_id=$emp_id";

    $resp = $mysqli->query($query);
    if($resp==1){
        echo "Record Updated";
    }else{
        echo "Problem Updating Record";
    }

?>