<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="../../public/assets/css/home.css"> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <link rel="stylesheet" href="public/assets/css/matches.css">
  <link rel="stylesheet" href="public/assets/css/reserveForm.css">
  <link rel="stylesheet" href="public/assets/header_footer.css">
  <title></title>
</head>

<body>
  <?php require "includes/navbar.php"; ?>

  <div class="p-2 " style="background-color: rgba(255, 255, 255, 0.3); height:150vh">
    <form class="reserve mx-auto" method="POST" action="ticket/create">

      <h4 class="text-center">RESERVATION FORM</h4>

      <div class="d-flex flex-row mb-3 align-items-center">
        <label class="form-label me-4">E-tickets</label>
        <div class="text-center" style="border: 2px solid black; width:10%;">12</div>
      </div>

      <div class="container w-100 col-md-6 text-center pt-8">
        <div class="match-title card text-dark card-has-bg click-col"
          style="background-image:url('public/images/ticket.jpg'); ">
          <div class="card-img-overlay d-flex flex-column">
            <div class="card-body">
              <h4 class="card-title text-center mt-4">
                <?= $matche['date'] ?>
              </h4>
              <p class="card-title mt-4 text-center ">
                <?= $matche['stadium']['name'] ?>
              </p>

              <div class="d-flex flex-row align-items-center justify-content-between my-2">
                <div class="col-3  d-flex flex-column text-center">

                  <img src="<?= $_ENV["APP_URL"] . $matche['team1']['flag_src'] ?>" alt="">

                  <p class="name mt-0 text-center">
                    <?= $matche['team1']['name'] ?>
                  </p>
                </div>
                <div class="vs me-2">VS</div>
                <div class="col-3  d-flex flex-column ms-2 text-center">

                  <img src="<?= $_ENV["APP_URL"] . $matche['team2']['flag_src'] ?>" alt="">

                  <p class="name mt-0 text-center">
                    <?= $matche['team2']['name'] ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <p class="info mt-3">SESSIONS DETAILS</p>
      <hr class="" style="width: 20%;">

      <div class="mb-3 mt-3">
        <label class="titre form-label">E-tickets</label>
        <input type="number" min="1" max="5000" class="input form-control text-center" id="tickets"
          aria-describedby="E-tickets number" placeholder="E-tickets number">
        <span></span>
        <div id="error"></div>
      </div>

      <input type="hidden" name="matche_id" value="<?= $matche['id']?>">
      <input type="hidden" name="stadium_id" value="<?= $matche['stadium_id']?>">
      <button type="submit" class="bout btn btn-primary mt-5" onclick="return validation()">Send your request here
      </button>
    </form>

    <!-- FAQ -->
    <div class="d-flex justify-content-center">
      <div class="rr d-flex flex-column mt-4 " style="background-color: #012F06;">
        <h1 class="mb-4 text-center">FAQ</h1>

        <div class="accordion-wrap mb-3" style="border-radius: 10px;">
          <button class="accordion faq" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="false" aria-controls="collapseOne" style="background-color: #012F06;">
            <div class="teaser">
              <div class="title">
                <h3>How can I change something in my order ?</h3>
              </div>
            </div>
          </button>

          <div class="collapse p-2" id="collapseOne" style="">
            <div class="content">
              If you need to change something in your order, please contact us immediately. We usually process orders
              within 30 minutes, and once we have processed your order, we will be unable to make any changes.</div>
          </div>
        </div>

        <div class="accordion-wrap mb-3" style="border-radius: 10px;">
          <button class="accordion faq" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo" style="background-color: #012F06;">
            <div class="teaser">
              <div class="title">
                <h3>How can I pay for my order ?</h3>
              </div>
            </div>
          </button>

          <div class="collapse" id="collapseTwo">
            <div class="content p-2">
              Answer to question 2 goes here.
            </div>
          </div>
        </div>

        <div class="accordion-wrap mb-3" style="border-radius: 10px;">
          <button class="accordion faq" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
            aria-expanded="false" aria-controls="collapseThree" style="background-color: #012F06;">
            <div class="teaser">
              <div class="title">
                <h3>Can I track my order ?</h3>
              </div>
            </div>
          </button>

          <div class="collapse" id="collapseThree">
            <div class="content p-2">
              Answer to question 3 goes here.
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <?php require "includes/footer.php"; ?>

  <!-- Bootstrap JavaScript (bundle) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-rqzGRByYnmzvWjf8rKznD6LrUnlOVuCXxQDzn/cpf3t8jUlfG9DWeDj4I1KtSTyi"
    crossorigin="anonymous"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var teasers = document.querySelectorAll('.accordion');

      teasers.forEach(function (teaser) {
        teaser.addEventListener('click', function () {
          var targetId = this.getAttribute('data-bs-target');
          var targetCollapse = document.querySelector(targetId);

          if (targetCollapse.classList.contains('show')) {
            targetCollapse.classList.remove('show');
          } else {
            targetCollapse.classList.add('show');
          }
        });
      });
    });
  </script>

</body>

</html>