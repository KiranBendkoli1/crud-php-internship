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
    <div class="container" style="width:80rem;">
      <div class="row">
        <div class="d-flex justify-content-center">
          
          <div class="card p-2">
          <h2 class="text-center">Employee Registration Form</h2>
            <form action="backend.php" method="post">
              <p>
                First Name
                <input type="text" name="fname" class="form-control" required/>
              </p>
              <p>
                Last Name
                <input type="text" name="lname" class="form-control" required/>
              </p>
              <p>
                Designation
                <select class="form-select" name="designation" id="designation">
                  <option value="">Choose</option>
                  <option value="Manager">Manager</option>
                  <option value="Coder">Coder</option>
                  <option value="Tester">Tester</option>
                  <option value="Data Scientist">Data Scientist</option>
                </select>
              </p>

              <p>
                Gender <br />
                <input
                  type="radio"
                  class="form-check-input"
                  name="gender"
                  id="gender"
                  value="male"
                />Male
                <input
                  class="form-check-input"
                  type="radio"
                  name="gender"
                  id="gender"
                  value="female"
                />Female
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
                <input type="number" name="mob_no" maxlength="10" required/>
              </p>
              <p>
                Address <br />
                <textarea
                  name="address"
                  id="address"
                  class="form-control"
                  cols="30"
                  rows="3"
                  required
                ></textarea>
              </p>
              <p>
                Email Address
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  required
                />
              </p>
              <p>
                Password
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  id="password"
                  required
                />
              </p>
              <p class="text-center">
                <button class="btn btn-primary">Register</button>
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
