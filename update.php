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

    $emp_id = $_GET['emp_id'];
    
    $query = "SELECT * FROM employees WHERE emp_id='$emp_id'";
    $result = $mysqli->query($query);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $emp_id = $row['emp_id']; 
            $fname = $row['fname'] ; 
            $lname = $row['lname'];  
            $destination = $row['designation'];
            $gender = $row['gender'];
            $mob_no = $row['mob_no'];
            $address = $row['address'];
            $email = $row['email'];
        }
    } else{
        echo "0 results";
    }



    ?>


    <div class="container" style="width:80rem;">
      <div class="row">
        <div class="d-flex justify-content-center">
          
          <div class="card p-2">
          <h2 class="text-center">Employee Registration Form</h2>
            <form action="ubackend.php" method="post">
              <p>
                First Name
                <input type="text" name="fname" class="form-control" value=<?php echo $fname;?> required/>
              </p>
              <p>
                Last Name
                <input type="text" name="lname" class="form-control" value=<?php echo $lname; ?> required/>
              </p>
              <p>
                Designation
                <input type="text" name="designation" class="form-control" value=<?php echo $destination; ?> required> 
              </p>

              <p>
                Gender
                <input
                  type="text"
                  class="form-control"
                  name="gender"
                  value=<?php echo $gender; ?>
                />
                
              </p>

              <p class="g-3">
                Mobile Number
                <input
                    class="col-auto"
                  type="text"
                  maxlength="4"
                  value="+91"
                  style="width: 3rem"
                />
                <input type="number" name="mob_no" maxlength="10" value=<?php echo $mob_no; ?> required/>
              </p>
              <p>
                Address <br />
                <textarea
                  name="address"
                  class="form-control"
                  cols="30"
                  rows="3"
                  required
                >
                  <?php echo $address; ?> 
                </textarea>
              </p>
              <p>
                Email Address
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  value = <?php echo $email; ?> 
                  required
                />
              </p>
              <p class="text-center">
                <input type="submit" class="btn btn-primary" value="Update" />
                <input type="hidden" name="emp_id" id="emp_id" value="<?php echo $emp_id ?>"> 
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
