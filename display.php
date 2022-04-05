<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
     <!-- Bootstrap CSS -->
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <style>
        .myrow{
            display:flex;
            margin:1rem;
            justify-content:space-around;
        }
        .myrow .btn{
            margin-top:0.5rem;
            height:fit-content;
        }
    </style>
</head>
<body>

   <div class="container">

   <div class="myrow">
    <h1>Employees Information</h1>
    <a href="registration.php" class="btn btn-sm btn-primary">Register</a>
   </div>
   <?php
        
        require_once 'db.php';

        // fetching all records of employees
        $query1 = "SELECT * FROM employees";
        $result = $mysqli->query($query1);

        // function to delete record of emp_id
        function delete($mysqli,$emp_id){
            $query = "DELETE FROM employees WHERE emp_id=$emp_id";

            if($mysqli->query($query)){
                echo "<script> alert('Record Deleted') </script>";
                header("Location: display.php"); // redirecting to refresh page
            }else{
                echo "<script> alert('Error Deleting Record') </script>";
                header("Location: display.php"); // redirecting to refresh page
            }
        }

?>
  
    <div class="row table-responsive">

    <table border="1" class="table table-hover">
           <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Gender</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Email Address</th>
                </tr>
            </thead>
        <?php    

            while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['emp_id']  ?></td>
                <td><?php echo $row['fname']  ?></td>
                <td><?php echo $row['lname']  ?></td>
                <td><?php echo $row['department']  ?></td>
                <td><?php echo $row['designation']  ?></td>
                <td><?php echo $row['gender']  ?></td>
                <td><?php echo $row['mob_no']  ?></td>
                <td><?php echo $row['address']  ?></td>
                <td><?php echo $row['email']  ?></td>
                <td><a style="color:white" class="btn btn-danger btn-sm" href="display.php?set=true">Delete</a></td>
                <td><a style="color:white" class="btn btn-info btn-sm" href="registration.php?update=true"<?php echo $row['emp_id']?>">Update</a></td>
            </tr>
        <?php
            if(isset($_GET['set'])){
                // if variable is set then call delete() with parameter connection object and current emp_id
                delete($mysqli,$row['emp_id']);
                }
            }
        ?>  
    </table>

    </div>
   </div>


    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
</body>
</html>