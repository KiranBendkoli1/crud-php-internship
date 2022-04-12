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
      if(isset($_GET['update'])){
        require_once 'db.php';
        $emp_id = $_GET['emp_id'];
        $query = "SELECT * FROM employees WHERE emp_id='$emp_id'";
        $result = $mysqli->query($query);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
              $emp_id = $row['emp_id']; 
              $fname = $row['fname'] ; 
              $lname = $row['lname'];  
              $designation = $row['designation'];
              $department = $row['department'];
              $gender = $row['gender'];
              $mob_no = $row['mob_no'];
              $address = $row['address'];
              $email = $row['email'];
            }
        }
      }
      
      function select($field,$value){
        
          if($field == $value){
            echo "selected";
          }
      }
      function check($field,$value){
        
        if($field == $value){
          echo "checked";
        }
    }
    ?>

    <div class="container" style="width:120rem;">
      <div class="row">
        <div class="d-flex justify-content-center">
          
          <div class="card shadow mt-4 p-2" style="width:40rem;">
          <h2 class="text-center m-3">Employee <?php echo (isset($_GET['update']))?"Updation":"Registration" ?> Form</h2>
            <form action="backend.php" method="post">
              <div class="row">
              <p class="col-md-6">
                First Name
                <input type="text" name="fname" class="form-control" <?php echo (isset($_GET['update']))? "value='$fname'":"value=''" ;?> required/>
              </p>
              <p class="col-md-6">
                Last Name
                <input type="text" name="lname" class="form-control"  <?php echo (isset($_GET['update']))? "value='$lname'":"value=''" ;?>  required/>
              </p>
              </div>
              <div class="row">
              <p class="col-md-6">
                Department
                <select class="form-select" name="department" id="department">
                  <option value="">Choose</option>
                  <option value="Software Development" <?php if(isset($_GET['update'])){select($department,'Software Development');} ?> >Sortware Development</option>
                  <option value="Business Development" <?php if(isset($_GET['update'])){select($department,'Business Development');} ?> >Business Development</option>
                  <option value="Quality Assurance" <?php if(isset($_GET['update'])){select($department,'Quality Assurance');} ?> >Quality Assurance</option>
                  <option value="Purchasing"  <?php if(isset($_GET['update'])){select($department,'Purchasing');} ?> >Purchasing</option>
                  <option value="Marketing"  <?php if(isset($_GET['update'])){select($department,'Marketing');} ?> >Marketing</option>
                  <option value="Sales"  <?php if(isset($_GET['update'])){select($department,'Sales');} ?> >Sales</option>
                  <option value="Human Resource"  <?php if(isset($_GET['update'])){select($department,'Human Resource');} ?>>Human Resource</option>
                  <option value="Finance"  <?php if(isset($_GET['update'])){select($department,'Finance');} ?> >Finance</option>
                </select>
              </p>
              <p class="col-md-6">
                Designation
                <select class="form-select" name="designation" id="designation">
                  <option value="">Choose</option>
                  <option value="Manager" <?php if(isset($_GET['update'])){select($designation,'Manager' );} ?> >Manager</option>
                  <option value="Coder" <?php if(isset($_GET['update'])){select($designation,'Coder' );} ?> >Coder</option>
                  <option value="Tester"  <?php if(isset($_GET['update'])){select($designation,'Tester' );} ?> >Tester</option>
                  <option value="Data Scientist"  <?php if(isset($_GET['update'])){select($designation,'Data Scientist' );} ?> >Data Scientist</option>
                </select>
              </p>

              </div>
              <div class="row m-2">
                <div class="col-md-3">Gender</div> 
                <div class="col-md-9 d-flex justify-content-end"><input
                    type="radio"
                    class="form-check-input"
                    name="gender"
                    id="gender"
                    value="male"
                    <?php if(isset($_GET['update'])){check($gender, "male");} ?>
                  />Male
                  <input
                  
                    class="form-check-input"
                    type="radio"
                    name="gender"
                    id="gender"
                    value="female"
                    <?php if(isset($_GET['update'])){check($gender, "female");} ?>
                  />Female
                </div>
            </div>

              <p class="g-3">
                Mobile Number
                <input
                    class="col-auto"
                  type="text"
                  maxlength="4"
                  value="+91"
                  style="width: 3rem"
                />
                <input type="number" name="mob_no" maxlength="10"  <?php echo (isset($_GET['update']))? "value='$mob_no'":"value=''" ;?> required/>
              </p>
              <p>
                Address <br />
                <textarea
                  name="address"
                  id="address"
                  class="form-control"
                  cols="30"
                  rows="2"
                  required
                > <?php echo (isset($_GET['update']))? $address:'' ;?>
              </textarea>
              </p>  
              <p>
                Email Address
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  <?php echo (isset($_GET['update']))? "value='$email'":"value=''" ;?>
                  required  
                />
              </p>
              <?php echo (isset($_GET['update']))?"":" <p>
                Password
                <input
                  type='password'
                  class='form-control'
                  name='password'
                  required
                />
              </p>" ?>
              <input type="hidden" name="emp_id" value="<?php echo $emp_id ?>">
              <p class="text-center">
                <button class="btn btn-primary"><?php echo (isset($_GET['update']))?"Update":"Register" ?></button>
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
