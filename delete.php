<?php

    require_once 'db.php';

    $emp_id = $_GET['emp_id'];
    
    $query = "DELETE FROM employees WHERE emp_id=$emp_id";

    if($mysqli->query($query)){
        echo "<script> alert('Record Deleted') </script>";
        header("Location: display.php");
    }else{
        echo "<script> alert('Error Deleting Record') </script>";
        header("Location: display.php");
    }
?>