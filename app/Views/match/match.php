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

    <link rel="stylesheet" href="../../../public/assets/css/matches.css">

    <link rel="stylesheet" href="../../../public/assets/header_footer.css">
    

    
    <title>Login Form</title>
  </head>
<body>
  <?php require "../includes/navbar.php"; ?>

  <div style="display:flex;justify-content:center;">
            <div class="search-section">
                <input name="search" type="text" placeholder="search...">

                <input type="text" id="datepicker" placeholder="Date">
                <button type="button" class="btn btn-success">
                    <img src="../../../public/images/search_icon.png" alt="search">
                </button>
            </div>
    </div>
    
<section class="wrapper">
  <div class="">
    <!-- <div class="row">
    
    </div> -->
  <div class="row">

      <div class=" col-md-6 text-center">
        <div class="match-title card text-dark card-has-bg click-col mb-2" style="background-image:url('../../../public/images/match.jpg'); ">
            <div class="card-img-overlay d-flex flex-column">
            <div class="card-body">
                <h4 class="card-title mt-0 text-center ">Jan 13, 21:00</h4>
                <p class="card-title mt-0 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                        <div class="col-3  d-flex flex-column text-center">
                            <img src="../../../public/images/tag.svg" alt="">
                            <p class="name mt-0 text-center">name</p>
                        </div>
                        <div class="vs me-2">VS</div>
                        <div class="col-3  d-flex flex-column ms-2 text-center">
                            <img src="../../../public/images/tag.svg" alt="">
                            <p class="name mt-0 text-center">name</p>
                        </div>
                    </div>
                    <!-- <div class="text-center"><a href="" class="btn border border-dotted  mt-5 py-3 px-5 fs-5">Reserve</a></div> -->
                    <button type="button" class="btn btn-success mt-5 py-3 px-5 fs-5" style=""><a href="" class="reserve">Reserve</a></button>
                </div>
        </div>
      </div></div>

      <div class=" col-md-6 text-center">
        <div class="match-title card text-dark card-has-bg click-col" style="background-image:url('../../../public/images/match.jpg'); ">
            <div class="card-img-overlay d-flex flex-column">
            <div class="card-body">
                <h4 class="card-title mt-0 text-center ">Jan 13, 21:00</h4>
                <p class="card-title mt-0 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                        <div class="col-3  d-flex flex-column text-center">
                            <img src="../../../public/images/tag.svg" alt="">
                            <p class="name mt-0 text-center">name</p>
                        </div>
                        <div class="vs me-2">VS</div>
                        <div class="col-3  d-flex flex-column ms-2 text-center">
                            <img src="../../../public/images/tag.svg" alt="">
                            <p class="name mt-0 text-center">name</p>
                        </div>
                    </div>
                    <!-- <div class="text-center"><a href="" class="btn border border-dotted  mt-5 py-3 px-5 fs-5">Reserve</a></div> -->
                    <button type="button" class="btn btn-success mt-5 py-3 px-5 fs-5" style=""><a href="" class="reserve">Reserve</a></button>
                </div>
        </div>
      </div></div>

      <div class=" col-md-6 text-center">
        <div class="match-title card text-dark card-has-bg click-col" style="background-image:url('../../../public/images/match.jpg'); ">
            <div class="card-img-overlay d-flex flex-column">
            <div class="card-body">
                <h4 class="card-title mt-0 text-center ">Jan 13, 21:00</h4>
                <p class="card-title mt-0 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                        <div class="col-3  d-flex flex-column text-center">
                            <img src="../../../public/images/tag.svg" alt="">
                            <p class="name mt-0 text-center">name</p>
                        </div>
                        <div class="vs me-2">VS</div>
                        <div class="col-3  d-flex flex-column ms-2 text-center">
                            <img src="../../../public/images/tag.svg" alt="">
                            <p class="name mt-0 text-center">name</p>
                        </div>
                    </div>
                    <!-- <div class="text-center"><a href="" class="btn border border-dotted  mt-5 py-3 px-5 fs-5">Reserve</a></div> -->
                    <button type="button" class="btn btn-success mt-5 py-3 px-5 fs-5" style=""><a href="" class="reserve">Reserve</a></button>
                </div>
        </div>
      </div></div>

      <div class=" col-md-6 text-center">
        <div class="match-title card text-dark card-has-bg click-col" style="background-image:url('../../../public/images/match.jpg'); ">
            <div class="card-img-overlay d-flex flex-column">
            <div class="card-body">
                <h4 class="card-title mt-0 text-center ">Jan 13, 21:00</h4>
                <p class="card-title mt-0 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                        <div class="col-3  d-flex flex-column text-center">
                            <img src="../../../public/images/tag.svg" alt="">
                            <p class="name mt-0 text-center">name</p>
                        </div>
                        <div class="vs me-2">VS</div>
                        <div class="col-3  d-flex flex-column ms-2 text-center">
                            <img src="../../../public/images/tag.svg" alt="">
                            <p class="name mt-0 text-center">name</p>
                        </div>
                    </div>
                    <!-- <div class="text-center"><a href="" class="btn border border-dotted  mt-5 py-3 px-5 fs-5">Reserve</a></div> -->
                    <button type="button" class="btn btn-success mt-5 py-3 px-5 fs-5" style=""><a href="" class="reserve">Reserve</a></button>
                </div>
        </div>
      </div></div>
</div>
  
</div>
</section>
<div ><a class="see" href="">See more</a></div>
<?php require "../includes/footer.php"; ?>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
    </script>
</body>
