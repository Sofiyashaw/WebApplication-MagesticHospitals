<!DOCTYPE html>
<html>
<head>
    <title>HMS Home page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .container .col-md-3 {
            flex: 0 0 auto;
            width: 25%;
            margin-bottom: 60px;
            text-align: center;
        }

        .container img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .container h5 {
            margin-bottom: 10px; 
            font-size: 18px;
        }

        .container .col-md-3:last-child {
            margin-bottom: 10px;
        }

        @media screen and (max-width: 768px) {
            .container .col-md-3 {
                width: 100%;
            }
        }

        .small-jumbotron {
            background-color: #F0EDE5;
            padding: 1rem;
            margin-bottom: 20px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 280px;
        }

        .small-jumbotron h5 {
            color: #41424C;
        }

        .jumbotron {
            background-color: #333333;
            padding: 40px;
            margin: 10px auto;
            border-radius: 0px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .jumbotron h1 {
            color: #6c757d;
            font-size: 24px;
        }

        .jumbotron p {
            color: #6c757d;
            font-size: 14px;
        }
        <style>
    /* Existing CSS styles */

    /* Add this style for image hover effect */
    .small-jumbotron  {
        transition: transform 0.3s ease;
    }

    .small-jumbotron:hover {
        transform: scale(1.05);
    }
</style>


    </style>
</head>
<body style="background-image: url(img/back-1.jpg);background-repeat:no-repeat;background-size:cover;">
    <?php include("include/header.php"); ?>
    <div class="container">
        <div class="col-md-3 mx-1 shadow">
            <img src="img/info.jpg" style="max-width: 250px;">
            <h5 style="color: #FFFFFF; font-family: 'cursive', cursive;">More Information</h5>
            <a href="moreinfo.php">
                <button class="btn btn-success my-3">More Info</button>
            </a>
        </div>
        <div class="col-md-3 mx-1 shadow">
            <img src="img/patient.jpg" style="max-width: 320px;">
            <h5 style="color: #FFFFFF; font-family: 'cursive', cursive;">Create Your Account</h5>
            <a href="account.php">
                <button class="btn btn-success my-3">Create Account</button>
            </a>
        </div>
        <div class="col-md-3 mx-1 shadow">
            <img src="img/doctor.jpg" style="max-width: 330px;">
            <h5 style="color: #FFFFFF; font-family: 'cursive', cursive;">We need doctors</h5>
            <a href="apply.php">
                <button class="btn btn-success my-3">Apply Now</button>
            </a>
        </div>
        <div class="col-md-4 mx-auto shadow mb-5"> <!-- First Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block mx-auto" src="img/car1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car4.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car5.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car6.jpg" alt="Sixth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        

    <!-- Additional content -->
    <div class="container mb-4">
        <div class="col-md-3 mx-1 shadow">
            <img src="img/trained.png" style="max-width: 300px;">
        </div>
        <div class="col-md-3 mx-1 shadow">
            <img src="img/operation.jpg" style="max-width: 300px;">
        </div>
        <div class="col-md-3 mx-1 shadow">
            <img src="img/infrastructure.jpg" style="max-width: 300px;">
        </div>
    </div>
    <div class="container">
        <div class="col-md-5 mx-1 shadow">
            <img src="img/q1.jpg" style="max-width: 300px;">
        </div>
        <div class="col-md-5 mx-1 shadow">
            <img src="img/q2.jpg" style="max-width: 250px;">
        </div>
    </div>

    <div class="col-md-4 mx-auto shadow mt-5 mb-5"> <!-- Second Carousel -->
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block mx-auto" src="img/car7.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car8.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car9.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car10.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car11.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="img/car12.jpg" alt="Sixth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron text-center mb-6">
        <h1 style="color: #FFFFFF;">Meet My Team</h1>
        <p style="color: #FFFFFF;">Here are the amazing professionals who make up our team.</p>
    </div>

    <!-- Team images -->
    <div class="container">
        <div class="col-md-3 mx-2 shadow">
            <div class="small-jumbotron">
                <img src="img/ran.jpg" style="max-width: 160px;">
                <h5 style="color: #000000; font-family: 'cursive', cursive;">Randall</h5>
                <p>Chief Doctor</p>
            </div>
        </div>
        <div class="col-md-3 mx-2 shadow">
            <div class="small-jumbotron">
                <img src="img/steve.jpg" style="max-width: 150px;">
                <h5 style="color: #000000; font-family: 'cursive', cursive;">Steve</h5>
                <p>Cardiologist</p>
            </div>
        </div>
        <div class="col-md-3 mx-2 shadow">
            <div class="small-jumbotron">
                <img src="img/tesde.jpg" style="max-width: 160px;">
                <h5 style="color: #000000; font-family: 'cursive', cursive;">Tesde</h5>
                <p>Neurologist</p>
            </div>
        </div>
        <div class="col-md-3 mx-2 shadow">
            <div class="small-jumbotron">
                <img src="img/yara.jpg" style="max-width: 210px;">
                <h5 style="color: #000000; font-family: 'cursive', cursive;">Yara</h5>
                <p>Child Specialist</p>
            </div>
        </div>
        <div class="col-md-3 mx-2 shadow">
            <div class="small-jumbotron">
                <img src="img/ashwin.jpg" style="max-width: 145px;">
                <h5 style="color: #000000; font-family: 'cursive', cursive;">Ashwin</h5>
                <p>Dermatologist</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
