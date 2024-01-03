<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "includes/head_hf.php"; ?>
    <link rel="stylesheet" href="../../public/assets/css/home.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    $(function() {
        $("#datepicker").datepicker();
    });
    </script>
    <style>
    .swiper {
        width: 95%;
        height: 300px;
    }

    .swiper-button-next,
    .swiper-button-prev {
        background-color: orange;
        color: white;
        padding: 30px;
        height: 10px;
        border-radius: 10px;
    }

    div.swiper-button-next::after,
    div.swiper-button-prev::after {
        color: white;
        margin: 10px;

    }

    .swiper-slide {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    </style>
</head>

<body>


    <?php require "includes/navbar.php"; ?>
    <section class="main-home" style="margin-bottom:50px;">
        <div class="main-hero">
            <h1 class="hero-header">Exciting moments<br>await You</h1>
        </div>
        <div style="display:flex;justify-content:center;">
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
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../../public/images/Morocco.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Morocco Nationale Team</h5>
                        <p>Group F</p>
                        <div style="display:flex;">
                            <img src="../../public/images/location.svg" style="height:30px;">
                            <h4>Morocco</h4>
                        </div>
                        <div style="text-align:center;margin-top:10px;">
                            <a href="#" style="background-color:orange;color:white;font-weight:bold;" class="btn">More
                                Infos</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../../public/images/Morocco.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Morocco Nationale Team</h5>
                        <p>Group F</p>
                        <div style="display:flex;">
                            <img src="../../public/images/location.svg" style="height:30px;">
                            <h4>Morocco</h4>
                        </div>
                        <div style="text-align:center;margin-top:10px;">
                            <a href="#" style="background-color:orange;color:white;font-weight:bold;" class="btn">More
                                Infos</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../../public/images/Morocco.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Morocco Nationale Team</h5>
                        <p>Group F</p>
                        <div style="display:flex;">
                            <img src="../../public/images/location.svg" style="height:30px;">
                            <h4>Morocco</h4>
                        </div>
                        <div style="text-align:center;margin-top:10px;">
                            <a href="#" style="background-color:orange;color:white;font-weight:bold;" class="btn">More
                                Infos</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../../public/images/Morocco.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Morocco Nationale Team</h5>
                        <p>Group F</p>
                        <div style="display:flex;">
                            <img src="../../public/images/location.svg" style="height:30px;">
                            <h4>Morocco</h4>
                        </div>
                        <div style="text-align:center;margin-top:10px;">
                            <a href="#" style="background-color:orange;color:white;font-weight:bold;" class="btn">More
                                Infos</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../../public/images/Morocco.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Morocco Nationale Team</h5>
                        <p>Group F</p>
                        <div style="display:flex;">
                            <img src="../../public/images/location.svg" style="height:30px;">
                            <h4>Morocco</h4>
                        </div>
                        <div style="text-align:center;margin-top:10px;">
                            <a href="#" style="background-color:orange;color:white;font-weight:bold;" class="btn">More
                                Infos</a>
                        </div>
                    </div>
                </div>
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
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    </script>
</body>

</html>