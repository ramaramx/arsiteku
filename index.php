<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/adf1436747.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Arsiteku</title>
</head>

<body class="body">

    <?php include("navbar.phtml"); ?>

    <!--Section1-->
    <div class="container">
        <div class="container1">
            <div class="row">
                <div class="col">
                    <h1>Build Your</h1>
                    <h1>Home Design</h1>
                    <h1>with AR</h1>
                    <p>The harder you work for something, the <br /> greater you’ll feel when you achieve it.</p>
                    <div class="col">
                        <button type="button" class="btn btn-light">LEARN MORE</button>
                        <a href="../arsiteku/contoh/public/index.html">
                            <button type="button" class="btn btn-outline-light">DEMO</button>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <img src="asset/run.png" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!--Bussines Partner-->
    <div class="container">
        <div class="bussinespartner">
            <img src="asset/bussinespartner.png" class="img-fluid" alt="...">
        </div>
    </div>

    <!--Our Services-->
    <div class="container">
        <div class="ourservices">
            <h2 class="text-center">Our Product & Services</h2>
            <p class="text-center">There are many reasons to get down and start to get depressed about your situation.
            </p>
            <div class="row">
                <div class="col">
                    <div class="ourservices">
                        <div style="width: 24rem;">
                            <img src="asset/run.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Commercial Projects</h5>
                                <p class="card-text">
                                    With Arsiteku commercial projects, there’s nothing we love more than a challenge, so please get in touch and give us the opportunity to flex our creativity.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ourservices">
                        <div style="width: 24rem;">
                            <img src="asset/run.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Assets Licensing</h5>
                                <p class="card-text">
                                    With Arsiteku commercial projects, there’s nothing we love more than a challenge, so please get in touch and give us the opportunity to flex our creativity.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ourservices">
                        <div style="width: 24rem;">
                            <img src="asset/run.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">RAB</h5>
                                <p class="card-text">
                                    With Arsiteku commercial projects, there’s nothing we love more than a challenge, so please get in touch and give us the opportunity to flex our creativity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Create Your Project-->
    <div class="container">
        <div class="createproject">
            <div class="row">
                <h2 class="text-center">Create your next project with</br>startup framework</h2>
                <a href="../arsiteku/3D/editor/index.html">
                    <div class="d-grid gap-2 col-2 mx-auto">
                        <button class="btn btn-light" type="button">Create</button>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--Carousel-->
    <div class="container">
        <div class="carouselimg">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="asset/carousel1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/carousel1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/carousel1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


    <?php include("ui.phtml"); ?>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>