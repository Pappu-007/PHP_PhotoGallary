<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
    <body class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Photo Gallary</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#action">Action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#survival">Survival</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#raching">Raching</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        </nav>

        <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            
            <div class="carousel-item active">
            <img src="images/g1.jpg" class="d-block w-100" alt="Survival">
            <div class="carousel-caption d-none d-md-block">
                <h3>Association Creed</h3>
            </div>

            </div>
            <div class="carousel-item">
            <img src="images/g2.jpg" class="d-block w-100" alt="Action">
            <div class="carousel-caption d-none d-md-block">
                <h3>Coll Of Duty</h3>
            </div>

            </div>
            <div class="carousel-item">
            <img src="images/g4.jpg" class="d-block w-100" alt="Survival">
            <div class="carousel-caption d-none d-md-block">
                <h3>God of Ware</h3>
            </div>
            
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

        <a id="action">
        <section class="my-4 mt-5">
            <div class="py-4 bg-dark">
                <h2 class="text-center text-light">Action</h2>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ag1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ag2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ag3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ag4.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ag5.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ag6.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
        </a>

        <a id="survival">
        <section class="my-4 mt-5">
            <div class="py-4 bg-dark">
                <h2 class="text-center text-light">Survival</h2>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/sg1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/sg2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/sg3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/sg4.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/sg5.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/sg6.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
        </a>

        <br>
        <a id="raching">
        <section class="my-4 mt-5">
            <div class="py-4 bg-dark">
                <h2 class="text-center text-light">Raching</h2>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/rg1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/rg2.jpeg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/rg3.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
        </a>

        <a id="contact"></a>
        <section>
            <div class="py-4">
                <h2 class="text-center">Contact Us</h2>
            </div>
            <div class="w-50 m-auto">
                <form action="about.php" method="post">
                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Number:</label>
                        <input type="text" name="number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </section>
        </a>

        <a id="about">
        <section class="my-4">
            <div class="py-4 bg-dark">
                <h2 class="text-center text-light">About ME</h2>
            </div>
            <div class="container-fluid bg-dark">
                <h3 class="text-center text-light">Shahed Hasan Pappu</h3>
                <p class="text-center text-light">
                    <b>
                    Motivated and hardworking Junior Software Engineer with a passion for utilizing technology to develop
                    innovative solutions for customers. Seeking to leverage my programming and debugging skills to improve
                    application scalability, reliability, and usability. Committed to a culture of collaboration and excellence, with a
                    dedication to staying up-to-date on the latest development standards and best practices.

                    </b>
                </p>
            </div>
            

        </section>
        </a>

        



        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>
</html>