
<?php 
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="../../public/assets/css/home.css"> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="../../public/assets/css/reserveForm.css">
    <link rel="stylesheet" href="../../public/assets/header_footer.css">


    <title>Login Form</title>
   
  </head>

  <body>
  <?php require "includes/navbar.php"; ?>

        <div class="p-2" style="background-color: rgba(255, 255, 255, 0.3); height:140vh">
        <form class="reserve mx-auto">
              <h4 class="text-center">RESERVATION FORM</h4>
              <p>CLIENTS DETAILS</p>

              <div class="mb-3 mt-5">
                <!-- <label for="exampleInputEmail1" class="form-label text-center">User Name</label> -->
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
                <!-- <label for="exampleInputPassword1" class="form-label">Email</label> -->
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <!-- <label for="exampleInputEmail1" class="form-label">Address</label> -->
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">phone</label>
                <!-- <label for="exampleInputEmail1" class="form-label">phone</label> -->
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <p class="mt-4 mb-5">SESSIONS DETAILS</p>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-tickets</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
          
              <button type="submit" class="bout btn btn-primary mt-5">Send your request here </button>
            </form>
        
  <!-- FAQ -->
  <div class="d-flex justify-content-center">
    <div class="rr d-flex flex-column mt-4">

      <div class="accordion-wrap mb-3">
        <a class="accordion" data-bs-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false">
          <div class="teaser">

            <div class="title">
              <h3>Unterthema Y</h3>
            </div>
          </div>
        </a>

        <div class="collapse" id="collapseOne">
          <div class="content">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </div>  
      <div class="accordion-wrap mb-3">
        <a class="accordion" data-bs-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false">
          <div class="teaser">

            <div class="title">
              <h3>Unterthema Y</h3>
            </div>
          </div>
        </a>

        <div class="collapse" id="collapseOne">
          <div class="content">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </div>

      <div class="accordion-wrap mb-3">
        <a class="accordion" data-bs-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false">
          <div class="teaser">

            <div class="title">
              <h3>Unterthema Y</h3>
            </div>
          </div>
        </a>

        <div class="collapse" id="collapseOne">
          <div class="content">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>

  <?php require "includes/footer.php"; ?>


<!-- </div> -->
<!-- <footer class="tt mt-4"><p>cghjklm
  edmzemdldlù* <br>hjklmù</p></footer> -->
      <!-- </div> -->

        <!-- </div class="mt-4"> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

  </body>
</html>