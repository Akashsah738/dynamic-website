
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Project</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img3.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img6.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img2.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="images/img4.avif" alt="" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="display-4">I am Akash Sah</h2>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum culpa quisquam, hic
                        ipsum impedit eaque officia laudantium vel quo, soluta dolorum et cupiditate at iure voluptate a
                        adipisci quos iste fugiat. Voluptates unde molestias esse ipsam fugiat velit, ipsum quia, libero
                        voluptate rerum quo laborum! Iusto alias ullam veniam obcaecati!</p>
                    <a href="about.php" class="btn btn-success">Know More</a>
                </div>
            </div>
        </div>



    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <img src="images/img5.avif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <img src="images/img6.avif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <img src="images/img7.avif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/img9.avif" alt="" class="img-fluid pb-3">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/img10.avif" alt="" class="img-fluid pb-3">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/img9.avif" alt="" class="img-fluid pb-4">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/img12.avif" alt="" class="img-fluid pb-4">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/img13.avif" alt="" class="img-fluid pb-4">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/img14.avif" alt="" class="img-fluid pb-4">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/img5.avif" alt="" class="img-fluid pb-4">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/img6.avif" alt="" class="img-fluid pb-4">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/img7.avif" alt="" class="img-fluid pb-4">

                </div>

            </div>

        </div>

    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group pb-3">
                    <label>UserName</label>
                    <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group pb-3">
                    <label>Email</label>
                    <input type="text" name="email"  class="form-control">
                </div>
                <div class="form-group pb-3">
                    <label>Phone</label>
                    <input type="text" name="phone"  class="form-control">
                </div>
                <div class="form-group pb-3">
                    <label>Comments</label>
                    <textarea class="form-control" name="comments"></textarea>
                </div>
                
                    <button type="submit" class="btn btn-success pb-3">Submit</button>
                
            </form>
        </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@AkashSahProduction2022</p>
    </footer>










    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
<!-- INSERT INTO `userinfo` (`sno`, `name`, `email`, `phone`, `comments`) VALUES ('1', 'Akash Sah', 'sky@gmail.com', '1234567890', 'this is gud value'); -->
