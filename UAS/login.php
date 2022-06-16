<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/styles.css">
    <title>Login - Bagus Nata</title>
    <link rel="icon" href="Assets/Image/Logo.png" type="image/jpg" />
  </head>

  <body class="bg-login">
    <!-- -->
    <div class=" d-flex">
      <div class="col-sm-6">
      </div>
      <div class="col-sm-6 position-absolute top-50 end-0 translate-middle-y">
        <div class="form-login-display">
          <div class="table-responsive-sm login-form-body shadow-login" >
            <form class="form-login-content" action="proses_login.php" method="POST">
              <div>
                <legend class="text-center login-tittle"><strong>Login</strong></legend>
                <!-- Username -->
                <div class="mb-3">
                  <label class="form-label label-font">Username / Email</label>
                  <input type="text" class="form-control input-display" name="username">
                </div>
                <!-- Password -->
                <div class="mb-3">
                  <label class="form-label label-font">Password</label>
                  <input type="password" class="form-control input-display" name="password" >
                </div>
                <button  
                  type="submit" 
                  class="btn btn-success btn-form-login btn-login"> 
                      Login 
                </button>
                <button  
                  type="button"
                  onclick="document.location='signUp.php'"
                  class="btn btn-outline-primary btn-form-signup btn-signup"> 
                      Sign up 
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- Untuk merefresh -->
    <?php if (isset ($_GET['m'])) : ?>
      <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
    <?php endif; ?>

  
    <!-- Optional JavaScript --> 
    <!-- SweetAlert2 --> 
    <script src="jquery-3.6.0.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
      const flashdata = $('.flash-data').data('flashdata')
      if (flashdata) {
          Swal.fire({
              icon  : 'success',
              title : 'Thank you',
              text  : 'You are logged out!',
          })
      }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>