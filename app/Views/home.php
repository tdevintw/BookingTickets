<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../../public/assets/head_hf.php"; ?>
</head>

<body>


    <?php require "includes/navbar.php"; ?>
    <section class="main-home">
        <div class="main-hero">
            <h1 class="hero-header">Exciting moments<br>await You</h1>
        </div>
        <div style="text-align:center;">
            <div class="search-section">
                <input name="search" type="text" placeholder="search...">
                <img src="images/calendar_today.png" id="datePicker" alt="date">
                <button type="button" class="btn btn-success">
                    <img src="images/search_icon.png" alt="search">
                    <span>Search</span>
                </button>
            </div>
        </div>
    </section>
    <?php require "includes/footer.php"; ?>
</body>

</html>