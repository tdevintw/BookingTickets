<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "includes/head_hf.php"; ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 <style>
    @media screen and (max-width: 900px) {
        div.search-section {
            width: 90%;
        }
    }
    @media screen and (max-width: 740px) {
        h1.hero-header {
            font-size: 2.5rem;
        }
    }

    .hero-header {

        color: #ffffff;
        font-family: Roboto;
        font-size: 5rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-top: 200px;
        text-shadow: rgb(0, 0, 0) 1px 0 10px;

    }

    .main-hero {
        display: flex;
        justify-content: center;
        background-image: url(../../public/images/hero_image.png);
        background-repeat: no-repeat;
        background-color: #cccccc;
        height: 500px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }

    .search-section {
        border: 1px solid black;
        margin-top: 20px;
        width: 40%;
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-around;


    }

    .search-section input {
        width: 40%;
        border: 1px solid black;
    }
    </style>
</head>

<body>


    <?php require "includes/navbar.php"; ?>
    <section class="main-home" style="margin-bottom:50px;">
        <div class="main-hero">
            <h1 class="hero-header">Exciting moments<br>await You</h1>
        </div>
        <div id="container_search" style="display:flex;justify-content:center;">
            <div class="search-section">
                <input name="search" type="text" placeholder="search...">

                <input type="text" id="datepicker" placeholder="Date">
                <button type="button" class="btn btn-success">
                    <img src="../../public/images/search_icon.png" alt="search">
                </button>
            </div>
        </div>
        <div class="teams" style="margin-top:50px;">
            <div style="display:flex;justify-content:space-around;align-items:center;">
                <h2>Nationale Teams</h2>
                <button
                    style="border-radius: 0.5rem;background: #329819;color:white;padding:8px;padding-left:15px;padding-right:15px;border:none;">View
                    All</button>
            </div>
            <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:50px;margin-top:50px;">
                <?php foreach ($teams as $team): ?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $_ENV["APP_URL"] . $team['team_image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $_ENV["APP_URL"] . $team['team_name'] ?></h5>
                        <p>Group F</p>
                        <div style="display:flex;">
                            <img src="../../public/images/location.svg" style="height:30px;">
                            <h4><?= $_ENV["APP_URL"] . $team['team_name'] ?></h4>
                        </div>
                        <div style="text-align:center;margin-top:10px;">
                            <a href="#" style="background-color:orange;color:white;font-weight:bold;" class="btn">More
                                Infos</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="stadiums" style="margin-top:50px;">
            <div style="display:flex;justify-content:space-around;align-items:center;">
                <h2>Nationale Teams</h2>
                <button
                    style="border-radius: 0.5rem;background: #329819;color:white;padding:8px;padding-left:15px;padding-right:15px;border:none;">View
                    All</button>
            </div>
            <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:50px;margin-top:50px;">
                <div class="card" style="width: 18rem;text-align:center;">
                    <img class="card-img-top" src="../../public/images/stadium.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Olympic Stadium of Ebimpé</h5>
                        <p><b>Capacity:</b> 60,012</p>
                        <div style="text-align:center;margin-top:10px;">
                            <a href="#" style="background-color:orange;color:white;font-weight:bold;" class="btn">More
                                Infos</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <?php require "includes/footer.php"; ?>
    <script>
    $(function() {
        $("#datepicker").datepicker();
    });
    </script>
</body>

</html>