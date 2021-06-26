<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>CART</title>
    <script src="https://kit.fontawesome.com/fd2eda39c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/StyleSheet1.css">
    <link rel="stylesheet" href="css/StyleSheet2.css">
    <link rel="stylesheet" href="css/StyleSheet3.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <div class="container-fluid bg-white">
                <div class="container-lg">
                    <div class="row">
                        <div id="currency" class="col-lg-1 col-md-2 d-none d-md-block">
                            <div class="dropdown">
                                <button id="button1" type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                    USD
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">€ EURO</a>
                                    <a class="dropdown-item" href="#">£ POUND Sterling</a>
                                    <a class="dropdown-item" href="#">$ US Dollar</a>
                                </div>
                            </div>
                        </div>
                        <div id="language" class="col-lg-9 col-md-5 d-none d-md-block">
                            <div class="dropdown">
                                <button id="button2" type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                    ENGLISH
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">ENGLISH</a>
                                    <a class="dropdown-item" href="#">GREEK</a>
                                    <a class="dropdown-item" href="#">DEUTSCH</a>
                                </div>
                            </div>
                        </div>
                        <div id="account" class="col-lg-1 col-md-3 d-none d-md-block">
                            <div class="dropdown">
                                <button id="button3" type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                    MY ACCOUNT
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="register.php">Register</a>
                                    <a class="dropdown-item" href="login.php">Log In</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2 d-none d-md-block m-0 p-0">
                            <a id="checkout" class="btn" href="#">CHECKOUT</a>
                        </div>
                    </div>
                    <div class="row">
                        <div id="search" class="col-lg-4 col-md-4 d-none d-md-block">
                            <form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
                                <i class="fas fa-search" aria-hidden="true"></i>
                                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                                       aria-label="Search">
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-4 d-none d-md-block m-0">
                            <div id="logo" class="text-center m-0">
                                <img src="images/logo3.png" class="img-fluid" alt="dog-cat" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 d-none d-md-block">
                            <a id="favourite" class='far fa-heart' href="#"></a>
                        </div>
                        <div class="col-lg-1 col-md-1 d-none d-md-block">
                            <a id="cart" class='fas fa-shopping-bag' href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid bg-white">
            <div class="container-lg">
                <div class="row">
                    <div class="col-3 d-md-none d-sm-block navbar-light">
                        <button id="burger" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="d-md-none d-sm-block col-7">
                        <div>
                            <img src="images/logo3.png" class="img-fluid" alt="dog-cat" />
                        </div>
                    </div>
                    <div class="d-md-none d-sm-block col-2">
                        <div id="cog" class="dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-cog"></i>
                            </button>
                            <div class="dropdown-menu ">
                                <a class="dropdown-item pl-1" href="#">Checkout</a>
                                <a class="dropdown-item pl-1" href="login.php">Login</a>
                                <a class="dropdown-item pl-1" href="register.php">Register</a>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="col-lg-12 col-md-12 navbar navbar-expand-md ">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="col-lg-12 col-md-12 navbar-nav  nav-justified">
                            <li class="nav-item active mr-lg-3 mr-md-2">

                                <a class="nav-link" href="dogproducts.php"> Dog</a>
                            </li>
                            <li class="nav-item mr-lg-3 mr-md-2">
                                <a class="nav-link" href="catproducts.php">Cat</a>
                            </li>
                            <li class="nav-item mr-lg-3 mr-md-2">
                                <a class="nav-link" href="smallpetproducts.php"> Small Pet </a>
                            </li>
                            <li class="nav-item mr-lg-3 mr-md-2">
                                <a class="nav-link" href="birdproducts.php"> Bird </a>
                            </li>
                            <li class="nav-item mr-lg-3 text-nowrap mr-md-2">
                                <a class="nav-link" href="topbrands.php"> Top Brands </a>
                            </li>
                            <li class="nav-item mr-lg-3 text-nowrap">
                                <a class="nav-link" href="offers.php">Special Offers </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="d-md-none d-sm-block  col-12 m-0">
                    <div id="search1">
                        <form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                                   aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        