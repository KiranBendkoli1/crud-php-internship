<?php
require_once "db.php";
extract($_POST);

$query = "UPDATE dept_head set name='$name', email='$email', department='$department' where hid='$hid';";

$res = $mysqli->query($query);

if($res){
    echo "Record Updated";
}else{
    echo "Not able to Update";
}


?>