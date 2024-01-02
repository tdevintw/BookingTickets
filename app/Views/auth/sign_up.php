<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include_once'head_hf.php'; ?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="public\assets\css\c_au.css" rel="stylesheet" >
    <title>Sugn_up Form</title>
  </head>
  <body>

  
        <div class="container-fluid">
            <form class="mx-auto" id="regester-form">
                <h4 class="text-center">Login</h4>
                <div class="mb-3 mt-5">
                  <label for="name_inp" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="name_inp">
                  <span id="name_reg_err" class="text text-danger"></span>

                </div>
                <div class="mb-3 mt-5">
                    <label for="mail_inp" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="mail_inp" aria-describedby="emailHelp">
                    <span id="email_reg_err" class="text text-danger"></span>

                  </div>
                <div class="mb-3">
                  <label for="password_inp" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password_inp">
                  <span id="password_reg_err" class="text text-danger" ></span>

                </div>
              
                <button type="submit" class="btn btn-primary mt-5">regester</button>
              </form>
        </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>