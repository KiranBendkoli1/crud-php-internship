<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
     <!-- Bootstrap CSS -->
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

</head>
<body>

   <div class="container">


   <?php
        require_once 'db.php';

        $query = "SELECT * FROM employees";
        $result = $mysqli->query($query);
    ?>
    
    <div class="row table-responsive">

    <table border="1" class="table">
           <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
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
                <td><?php echo $row['designation']  ?></td>
                <td><?php echo $row['gender']  ?></td>
                <td><?php echo $row['mob_no']  ?></td>
                <td><?php echo $row['address']  ?></td>
                <td><?php echo $row['email']  ?></td>
                <td><button class="btn btn-danger btn-sm"><a href="delete.php?emp_id=<?php echo $row['emp_id']?>">DELETE</a></button></td>
                <td><button class="btn btn-info btn-sm"><a href="update.php?emp_id=<?php echo $row['emp_id']?>">UPDATE</a></button></td>
            </tr>
        <?php
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