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

    .swiper-button-next , .swiper-button-prev{
       background-color:orange;
       color:white;
       padding:30px;
       height:10px;
    }
       div.swiper-button-next::after , div.swiper-button-next::after{
       color:green;

    }

    </style>
</head>

<body>


    <?php require "includes/navbar.php"; ?>
    <section class="main-home">
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
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
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
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    </script>
</body>

</html>