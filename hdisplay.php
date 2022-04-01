<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HODs</title>
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
    <h1 class="d-flex justify-content-center m-2">HODs Information</h1>

   <?php
        require_once 'db.php';
        $query = "SELECT * FROM dept_head;";
        $result = $mysqli->query($query);
    ?>
    
    <div class="row table-responsive">

    <table border="1" class="table">
           <thead>
                <tr>
                    <th>HOD ID</th>
                    <th>Full Name</th>
                    <th>Department</th>
                    <th>Email Address</th>
                </tr>
            </thead>
        <?php    

            while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['hid']  ?></td>
                <td><?php echo $row['name']  ?></td>
                <td><?php echo $row['department']  ?></td>
                <td><?php echo $row['email']  ?></td>
                <td><button class="btn btn-danger btn-sm"><a href="hdelete.php?hid=<?php echo $row['hid']?>">DELETE</a></button></td>
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