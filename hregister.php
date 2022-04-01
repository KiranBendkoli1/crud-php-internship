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
        <div class="d-flex justify-content-center align-items-center mt-5">
          
          <div class="card shadow p-3">
          <h2 class="text-center">Head Of Department Registration Form</h2>
            <form action="hregback.php" method="post">
              <p class="mt-3">
                HOD's Full Name
                <input type="text" name="name" class="form-control" required/>
              </p>
              <p>
                Department
                <select class="form-select" name="department" id="department">
                  <option value="">Choose</option>
                  <option value="Sortware Development">Sortware Development</option>
                  <option value="Business Development">Business Development</option>
                  <option value="Quality Assurance">Quality Assurance</option>
                  <option value="Purchasing">Purchasing</option>
                  <option value="Marketing">Marketing</option>
                  <option value="Sales">Sales</option>
                  <option value="Human Resource">Human Resource</option>
                  <option value="Finance">Finance</option>
                </select>
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
