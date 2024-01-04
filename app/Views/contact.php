<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../public/assets/css/c_au.css" rel="stylesheet" >
    <title> Contact </title>
  </head>
  <body>
    
        <div class="container-fluid" id="contact-form">
            <form class="mx-auto" id="contact-form">
                <h4 class="text-center">Conta<span class="text text-success ">ct Us</span></h4>  <span></span>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name_in" class="form-label">your Name</label>
                            <input type="text" class="form-control" id="name_in" >
                            <span id="name_error" class="text text-danger"></span>

                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputNumber" class="form-label">your Number</label>
                            <input type="tel" class="form-control" id="exampleInputNumber">
                          </div>
                    </div>
                    <!--Grid column-->

                    <div class="md-form mb-0">
                        <label for="email_in" class="form-label">your Email</label>
                        <input type="email" class="form-control" id="email_in" aria-describedby="emailHelp">
                        <span id="email_error" class="text text-danger"></span>
                    </div>
                

            </div>

            <div class="mb-3 mt-5">
             <label for="exampleInputMessage" class="form-label">Message</label>
             <input type="text" class="form-control" id="message_in" >
             <span id="message_error" class="text text-danger"></span>

           </div>
              
                <button type="submit" class="btn btn-primary mt-5">Send</button>
              </form>
        </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>