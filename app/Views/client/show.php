<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $_ENV['APP_URL'] . "/public/assets/css/profile.css" ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Profile</title>
</head>

<body>
    <!-- Profile top -->
    <div class="d-flex justify-content-center">
        <div class="p-3 py-4">

            <div class="text-center">
                <img src="../../../../PeoplePerTask-Backend/assets/images/freelancers/adnan.jpg" width="100" class="rounded-circle">
            </div>

            <div class="text-center mt-3">
                <h4 class="mt-2 mb-0">Adnane Othmane</h4>
                <span>UI/UX Designer</span>

                <div class="social-list my-2">
                    <div class="">
                        <p class="fs-2 fw-bold m-0">23</p> <!-- Number of matches reserved -->
                        <p class="mt-0">Matches reserved</p>
                    </div>
                </div>

                <div class="buttons">
                    <button id="editBtn" class="btn btn-outline-infos px-4">Edit Profile</button>
                    <button class="btn btn-infos px-4 ms-3">More matches</button>
                </div>
            </div>


        </div>
    </div>

    <!-- Switch buttons -->
    <div class="row m-0">
        <div id="matchesBtn" class="col col-6 border-bottom text-center text-primary fw-bold border-primary border-3 border-bottom">
            <p class="fs-5 m-0 p-0">Matches</p>
        </div>
        <div id="infosBtn" class="col col-6 border-bottom text-center text-secondary border-bottom">
            <p class="fs-5 m-0 p-0">Infos</p>
        </div>
    </div>

    <!-- Sections -->
    <div>
        <!-- Matches reserved -->
        <div id="matchesSection" class="">
            <section class="wrapper">
                <div class="row m-0 p-5 justify-content-around gap-5">

                    <!-- Loop matches -->

                    <div class="card col col-12 col-md-5 card text-dark card-has-bg click-col" style="<?= "background-image: url('" . $_ENV['APP_URL'] . "/public/images/match.jpg');" ?>">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 mb-4 text-center">Jan 13, 21:00</h4>
                                <div class="cont d-flex flex-row align-items-center justify-content-between">
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Morocco</h2>
                                    </div>
                                    <div class="vs m-2">VS</div>
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Algeria</h2>
                                    </div>
                                </div>
                                <p class="card-title mt-5 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                            </div>
                        </div>
                    </div>

                    <div class="card col col-12 col-md-5 card text-dark card-has-bg click-col" style="<?= "background-image: url('" . $_ENV['APP_URL'] . "/public/images/match.jpg');" ?>">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 mb-4 text-center">Jan 13, 21:00</h4>
                                <div class="cont d-flex flex-row align-items-center justify-content-between">
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Morocco</h2>
                                    </div>
                                    <div class="vs m-2">VS</div>
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Algeria</h2>
                                    </div>
                                </div>
                                <p class="card-title mt-5 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                            </div>
                        </div>
                    </div>

                    <div class="card col col-12 col-md-5 card text-dark card-has-bg click-col" style="<?= "background-image: url('" . $_ENV['APP_URL'] . "/public/images/match.jpg');" ?>">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 mb-4 text-center">Jan 13, 21:00</h4>
                                <div class="cont d-flex flex-row align-items-center justify-content-between">
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Morocco</h2>
                                    </div>
                                    <div class="vs m-2">VS</div>
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Algeria</h2>
                                    </div>
                                </div>
                                <p class="card-title mt-5 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                            </div>
                        </div>
                    </div>

                    <div class="card col col-12 col-md-5 card text-dark card-has-bg click-col" style="<?= "background-image: url('" . $_ENV['APP_URL'] . "/public/images/match.jpg');" ?>">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 mb-4 text-center">Jan 13, 21:00</h4>
                                <div class="cont d-flex flex-row align-items-center justify-content-between">
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Morocco</h2>
                                    </div>
                                    <div class="vs m-2">VS</div>
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Algeria</h2>
                                    </div>
                                </div>
                                <p class="card-title mt-5 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                            </div>
                        </div>
                    </div>

                    <div class="card col col-12 col-md-5 card text-dark card-has-bg click-col" style="<?= "background-image: url('" . $_ENV['APP_URL'] . "/public/images/match.jpg');" ?>">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 mb-4 text-center">Jan 13, 21:00</h4>
                                <div class="cont d-flex flex-row align-items-center justify-content-between">
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Morocco</h2>
                                    </div>
                                    <div class="vs m-2">VS</div>
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Algeria</h2>
                                    </div>
                                </div>
                                <p class="card-title mt-5 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                            </div>
                        </div>
                    </div>

                    <div class="card col col-12 col-md-5 card text-dark card-has-bg click-col" style="<?= "background-image: url('" . $_ENV['APP_URL'] . "/public/images/match.jpg');" ?>">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 mb-4 text-center">Jan 13, 21:00</h4>
                                <div class="cont d-flex flex-row align-items-center justify-content-between">
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Morocco</h2>
                                    </div>
                                    <div class="vs m-2">VS</div>
                                    <div class="col text-center">
                                        <img src="<?= $_ENV['APP_URL'] . "/public/images/adnan.jpg" ?>" alt="team photo">
                                        <h2 class="mb-0">Algeria</h2>
                                    </div>
                                </div>
                                <p class="card-title mt-5 text-center">Stadium : Olympic Stadium of Ebimpé</p>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
        </div>

        <!-- Infos -->
        <div id="infosSection" class="d-none row m-0 justify-content-center py-5">
            <div class="col col-md-6">
                <form> <!-- Action to client update -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="email" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary px-3">Save changes</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?= $_ENV['APP_URL'] . "/public/assets/js/profile.js" ?>"></script>
</body>

</html>