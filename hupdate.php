<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Registration Form</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php
        require_once 'db.php';
        $hid = $_GET['hid'];
        $query = "SELECT * FROM dept_head WHERE hid='$hid';";
        $result = $mysqli->query($query);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $hid = $row['hid'];
                $name = $row['name'];
                $department = $row['department'];
                $email = $row['email'];
            }
        }

    ?>
    <div class="container" style="width:80rem;">
      <div class="row">
        <div class="d-flex justify-content-center align-items-center mt-5">
          
          <div class="card shadow p-3">
          <h2 class="text-center">Head Of Department Updation Form</h2>
            <form action="hubackend.php" method="post">
              <p class="mt-3">
                HOD's Full Name
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required/>
              </p>
              <p>
                Department
                <input type="text" name="department" class="form-control" value="<?php echo $department; ?>" required/>
            </p>
              
              <p>
                Email Address
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  value="<?php echo $email; ?>"
                  required
                />
              </p>
              <input type="hidden" name="hid" value="<?php echo $hid; ?>">
              <p class="text-center">
                <button class="btn btn-primary">Update</button>
              </p>
            </form>
          </div>
        </div>
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
