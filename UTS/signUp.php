<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/styles.css">
    <link rel="icon" href="Assets/Image/Logo.png" type="image/jpg" />
    <title>Sign Up - Bagus Nata</title>
  </head>

  <body class="bg-blackTheme">
    <!-- TABLE -->
    <div class="container"> 
      <div class="form-login-display position-absolute top-50 start-50 translate-middle">
        <div class="table-responsive-sm login-form-body shadow-login" >
          <form class="form-login-content" action="proses_signup.php" method="POST">
            <div>
              <legend class="text-center login-tittle">Sign Up</legend>
              <!-- Nama Lengkap -->
              <div class="mb-3">
                <label class="form-label label-font">Nama Lengkap</label>
                <input type="text" class="form-control input-display" name="fullname">
              </div>
              <!-- Username -->
              <div class="mb-3">
                <label class="form-label label-font">Username</label>
                <input type="text" class="form-control input-display" name="username">
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label class="form-label label-font">Email</label>
                <input type="email" class="form-control input-display" name="email">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label class="form-label label-font">Password</label>
                <input type="password" class="form-control input-display" name="password">
              </div>
              <button  
                type="submit" 
                class="btn btn-success btn-form-login btn-login"> 
                    Sign up 
              </button>
              <button 
                type="button"
                onclick="history.go(-1);" 
                class="btn btn-danger btn-form-login btn-login" 
                id="btn-cancel">Cancel
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>