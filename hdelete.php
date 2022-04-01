<?php

    require_once 'db.php';

    $hid = $_GET['hid'];
    
    $query = "DELETE FROM dept_head WHERE hid='$hid';";

    if($mysqli->query($query)){
        echo "Record Deleted";
    }else{
        echo "Error Deleting Record";
    }
?>