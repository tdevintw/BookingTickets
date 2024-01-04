
<?

use core\Validator;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../../public/assets/css/c_au.css" rel="stylesheet" >
    <title>Login Form</title>
  </head>
  <body>
        <div class="container container-fluid">
            <form class="mx-auto" method="post" action="./Signin" >
                <h4 class="text-center">Login</h4>
                <div class="mb-3 mt-5">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input  name="email" type="email" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                  <div  class="form-text mt-3">Forget password ?</div>
                </div>
              
                <button type="submit" class="btn btn-primary mt-5">Login</button>
              </form>
        </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>