<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/signupstyle.css" />
  </head>
  <body class="hero">
    <div>
      <br>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="signup.php" id="btnlogin"><b>SIGN UP</b></a>
          <a class="navbar-brand" href="login.php" id="btnsignup"><b>LOGIN</b></a>
        </div>
      </nav>
    </div>
    </div>
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div>
                  <img src="pic/logobus.png" alt="" id="logobus" />
                </div>
                <div>
                  <h2 style="text-align: center" id="header"><b>BUS - ARR</b></h2>
                </div>
                <div class="card shadow-lg border-0 mt-5" id="card">
                  <div class="card-body">
                    <form action="save-signup.php" method="post">
                      <br />
                      <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" />
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email" />
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" name="psswd" class="form-control" id="inputPassword" placeholder="Password" />
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password"  placeholder="Confirm Password" />
                      </div>
                      <br />
                      <div class="d-flex align-items-center justify-content-center">
                        <input class="button button2" id="signin" type="submit" value="Sign Up"></input>
                      </div>
                      <br />
                      <br />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
