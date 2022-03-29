<?php

    require_once 'db.php';

    $emp_id = $_GET['emp_id'];
    
    $query = "DELETE FROM employees WHERE emp_id=$emp_id";

    if($mysqli->query($query)){
        echo "Record Deleted";
    }else{
        echo "Error Deleting Record";
    }
?>