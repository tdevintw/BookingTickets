<?php
// echo '<pre>';
// var_dump($matches);
// echo '</pre>';

?>
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

    <link rel="stylesheet" href="./public/assets/css/matches.css">

    <link rel="stylesheet" href="./public/assets/header_footer.css">

    <title></title>
</head>

<body>
    <?php require "./app/Views/includes/navbar.php"; ?>

    <div style="display:flex;justify-content:center;">
        <div class="search-section">
            <input name="search" type="text" placeholder="search...">

            <input type="text" id="datepicker" placeholder="Date">
            <button type="button" class="btn btn-success">
                <img src="./public/images/search_icon.png" alt="search">
            </button>
        </div>
    </div>


    <?php
foreach ($matches as $key => $match) :
    ?>
    <section class="mt-4">
        <div class=" col-md-6 text-center" style="margin:0 auto ;">
   
        <?php if ($key === 0) : ?>
            <div class="match-title card text-dark card-has-bg click-col"
                style="background-image:url('./public/images/match.jpg'); ">
                <div class="card-img-overlay d-flex flex-column">
                    <div class="card-body">
                        <h4 class="card-title mt-0 text-center "><?= $match['date'] ?></h4>
                        <p class="card-title mt-0 text-center"><?= $match['stadium']['name'] ?></p>

                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                            <div class="col-3 d-flex flex-column text-center">
                                <img src="<?= $_ENV["APP_URL"] . $match['team1']['flag_src'] ?>" alt="">
                                <p class="name mt-0 text-center"><?= $match['team1']['name'] ?></p>
                            </div>
                            <div class="vs me-2">VS</div>
                            <div class="col-3 d-flex flex-column ms-2 text-center">
                                <img src="<?= $_ENV["APP_URL"] . $match['team2']['flag_src'] ?>" alt="">
                                <p class="name mt-0 text-center"><?= $match['team2']['name'] ?></p>
                            </div>
                        </div>

                        <button type="button" class="btn btn-success mt-3 py-3 px-5 fs-5">
                            <a href="" class="reserve">Reserve</a>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endforeach; ?>


<section class="mt-4">
        <div class=" col-md-6 text-center" style="margin:0 auto ;">
        <h3 class="title text-start">Next Match</h3>
            <hr style="width: 18%">
            <?php
            foreach ($matches as $key => $match) :
            ?>
        <?php if ($key === 1) : ?>
            <div class="match-title card text-dark card-has-bg click-col"
                style="background-image:url('./public/images/match.jpg'); ">
                <div class="card-img-overlay d-flex flex-column">
                    <div class="card-body">
                        <h4 class="card-title mt-0 text-center "><?= $match['date'] ?></h4>
                        <p class="card-title mt-0 text-center"><?= $match['stadium']['name'] ?></p>

                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                            <div class="col-3 d-flex flex-column text-center">
                                <img src="<?= $_ENV["APP_URL"] . $match['team1']['flag_src'] ?>" alt="">
                                <p class="name mt-0 text-center"><?= $match['team1']['name'] ?></p>
                            </div>
                            <div class="vs me-2">VS</div>
                            <div class="col-3 d-flex flex-column ms-2 text-center">
                                <img src="<?= $_ENV["APP_URL"] . $match['team2']['flag_src'] ?>" alt="">
                                <p class="name mt-0 text-center"><?= $match['team2']['name'] ?></p>
                            </div>
                        </div>

                        <button type="button" class="btn btn-success mt-3 py-3 px-5 fs-5">
                            <a href="" class="reserve">Reserve</a>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
<?php endforeach; ?>

    </div>

    <section class="container">
        <h3 class="title">Upcoming Match</h3>
        <hr class="" style="width: 20%;">

            <div class="row">
            <?php
        foreach($matches as $match) : 
        ?>
                <div class=" col-md-6 text-center">
                    <div class="match-title card text-dark card-has-bg click-col mb-2"
                        style="background-image:url('./public/images/match.jpg'); ">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <h4 class="card-title mt-0 text-center "><?= $match['date'] ?></h4>
                                <p class="card-title mt-0 text-center"><?= $match['stadium']['name'] ?></p>
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="col-3  d-flex flex-column text-center">

                                <img src="<?= $_ENV["APP_URL"] . $match['team1']['flag_src'] ?>" alt="">

                                <p class="name mt-0 text-center"><?= $match['team1']['name'] ?></p>
                                    </div>
                                    <div class="vs me-2">VS</div>
                                    <div class="col-3  d-flex flex-column ms-2 text-center">

                                    <img src="<?= $_ENV["APP_URL"] . $match['team2']['flag_src'] ?>" alt="">

                                        <p class="name mt-0 text-center"><?= $match['team2']['name'] ?></p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success mt-3 py-3 px-5 fs-5" style=""><a href=""
                                        class="reserve">Reserve</a></button>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>

        </div>

    </section>
 

    <?php require "./app/Views/includes/footer.php"; ?>
    
    <!-- <script>
        $(function () {
            $("#datepicker").datepicker();
        });
    </script> -->
</body>