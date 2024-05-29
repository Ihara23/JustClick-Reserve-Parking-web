<?php include('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Sign Up </title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <!--<link rel="icon" href="images/favicon.png">-->
</head>

<body>

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-text" href="index.html">JUST-CLICK</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#features">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#invitation">Locate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="detail.html">Details</a>
                    </li>

                </ul>
                <span class="nav-item">
                        <a class="btn-outline-sm" href="log-in.html">Regsiter / Log In</a>
                    </span>
            </div>
        </div>
    </nav>


    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="text-center">Sign Up</h1>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </header>
    <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-form-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="text-box mt-5 mb-5">
                        <p class="mb-4">Fill out the form below to sign up for the service. Already signed up? Then just <a class="blue" href="log-in.php">Log In</a></p>

                        <!-- Sign Up Form -->
                        <form action="source/user-register.php" method="post" enctype="multipart/form-data" id="signupForm">
                            <div class="mb-4 form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user_email">
                                <label for="floatingInput">Email address</label>
                                <p class="text-danger" id="floatingInput_error"></p>

                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="floatingInput2" placeholder="Your name" name="user_name">
                                <label for="floatingInput">Your name</label>
                                <p class="text-danger" id="floatingInput2_error"></p>

                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="floatingInput2" placeholder="Your Contact Number" name="user_contactno">
                                <label for="floatingInput">Your Contact Number</label>
                                <p class="text-danger" id="floatingInput2_error"></p>

                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="floatingInput2" placeholder="Your adress" name="user_address">
                                <label for="floatingInput">Your Address</label>
                                <p class="text-danger" id="floatingInput2_error"></p>

                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="floatingInput2" placeholder="Your Vehicle number" name="user_vehicleno">
                                <label for="floatingInput">Your Vehicle number</label>
                                <p class="text-danger" id="floatingInput2_error"></p>

                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="user_password">
                                <label for="floatingPassword">Password</label>
                                <p class="text-danger" id="floatingPassword_error"></p>

                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms & Conditions</a></label>
                            </div>
                            <p class="text-danger" id="exampleCheck1_error"></p>

                            <button type="submit" name="submit" class="form-control-submit-button">Sign up</button>
                        </form>
                        <!-- end of sign up form -->

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Website</h6>
                        <p class="p-small">JUST-CLICK is a complete parking management system that applies smart solutions for short time rental of empty spaces.</p>
                    </div>
                    <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="contact.html">Contact Us</a></li>
                            <li>Menu: <a href="#header">Home</a></li>
                            <li> <a href="#features">Services</a></li>
                            <li><a href="detail.html">Details</a></li>
                        </ul>
                    </div>
                    <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                        <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                        <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                        <p class="p-small">GET IN TOUCH
                                <a href="mailto:justclick@gmail.com"><strong>justclick@gmail.com</strong></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Your name</a></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="js/replaceme.min.js"></script>
    <!-- ReplaceMe for rotating text -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
    <script src="js/validate.js"></script>
    <!-- validate form script -->
</body>

</html>