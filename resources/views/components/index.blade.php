<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Photoshot Blogsite!</title>
    <link rel="icon" type="image/x-icon" href={{asset('assets/img/favicon.ico')}}/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{"css/app.css"}}">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href={{asset("css/styles.css")}} rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
{{--        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>--}}
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#catagories">Blog</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('contact')}}">Contact</a></li>

{{--                @if(!auth()->check())--}}
{{--                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('login')}}">Login</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('register')}}">Register</a></li>--}}
{{--                @else--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                            document.getElementById('logout-form').submit();">--}}
{{--                            {{ __('Logout') }}--}}
{{--                         </a>--}}
{{--                    </li>--}}

{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                @endif--}}
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->

<header class="masthead">
    <div class="container">

        <div class="masthead-heading text-uppercase">Photo shot</div>
        <div class="masthead-subheading">Beauty of Captures</div>
        <br>
        <br>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#catagories">Click to Explore</a>
    </div>
</header>




{{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
{{--    <ol class="carousel-indicators">--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
{{--    </ol>--}}
{{--    <div class="carousel-inner">--}}
{{--        <div class="carousel-item active">--}}
{{--            <img class="d-block w-100" src="assets/img/header-bg.jpg" alt="First slide">--}}
{{--            <div class="carousel-caption d-none d-md-block">--}}
{{--                <h5>Test</h5>--}}
{{--                <button type="button" class="btn btn-primary">Test</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="d-block w-100" src="assets/img/cam.jpg" alt="Second slide">--}}
{{--        </div>--}}

{{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
{{--    <ol class="carousel-indicators">--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
{{--    </ol>--}}
{{--    <div class="carousel-inner">--}}
{{--        <div class="carousel-item active">--}}
{{--            <img class="d-block w-100" src="assets/img/carrousal-pics/poly.jpg" alt="First slide">--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="d-block w-100" src="assets/img/carrousal-pics/as.jpg" alt="Second slide">--}}
{{--        </div>--}}


{{--    </div>--}}
{{--    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
{{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Previous</span>--}}
{{--    </a>--}}
{{--    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
{{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Next</span>--}}
{{--    </a>--}}
{{--</div>--}}


<!-- Services-->
{{--<section class="page-section" id="services">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center">--}}
{{--            <h2 class="section-heading text-uppercase">Services</h2>--}}
{{--            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
{{--        </div>--}}
{{--        <div class="row text-center">--}}
{{--            <div class="col-md-4">--}}
{{--                        <span class="fa-stack fa-4x">--}}
{{--                            <i class="fas fa-circle fa-stack-2x text-primary"></i>--}}
{{--                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>--}}
{{--                        </span>--}}
{{--                <h4 class="my-3">E-Commerce</h4>--}}
{{--                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                        <span class="fa-stack fa-4x">--}}
{{--                            <i class="fas fa-circle fa-stack-2x text-primary"></i>--}}
{{--                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>--}}
{{--                        </span>--}}
{{--                <h4 class="my-3">Responsive Design</h4>--}}
{{--                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                        <span class="fa-stack fa-4x">--}}
{{--                            <i class="fas fa-circle fa-stack-2x text-primary"></i>--}}
{{--                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>--}}
{{--                        </span>--}}
{{--                <h4 class="my-3">Web Security</h4>--}}
{{--                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="catagories">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Blog of Photoshot</h2>
            <h3 class="section-subheading text-muted"> <div class="portfolio-hover-content"><i class="fas fa-camera fa-4x"></i></div></h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>

                        <img class="img-fluid" src="assets/img/catagories/abstract/ab2.jpg" alt="" />

                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Abstract</h3></div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" class="w-50 p-3" src="assets/img/catagories/nature/n3.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Nature</h3></div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/catagories/sports/sp2.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Sports/Action</h3>

                        </div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x" ></i></div>
                        </div>
                        <img class="img-fluid" style="" src="assets/img/catagories/wild/w7.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Wild Life</h3></div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/catagories/b&w/b9.jpeg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Black & White</h3></div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/catagories/fashion/f6.png" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Fashion</h3></div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/catagories/adventure/ad7.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Adventure</h3></div>
                        <div class="portfolio-caption-subheading text-muted">Explore</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/catagories/potrait/pot1.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Potrait</h3></div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/catagories/architectural/ar10.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Architectural</h3>
                        </div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/catagories/candid/can6.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Candid</h3></div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/catagories/cityscape/city4.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">

                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Cityscape</h3></div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-camera fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/catagories/astro/as7.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><h3 style="color:#465349">Astrography</h3>
                        </div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-->
{{--<section class="page-section" id="about">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center">--}}
{{--            <h2 class="section-heading text-uppercase">About</h2>--}}
{{--            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
{{--        </div>--}}
{{--        <ul class="timeline">--}}
{{--            <li>--}}
{{--                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>--}}
{{--                <div class="timeline-panel">--}}
{{--                    <div class="timeline-heading">--}}
{{--                        <h4>2009-2011</h4>--}}
{{--                        <h4 class="subheading">Our Humble Beginnings</h4>--}}
{{--                    </div>--}}
{{--                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="timeline-inverted">--}}
{{--                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>--}}
{{--                <div class="timeline-panel">--}}
{{--                    <div class="timeline-heading">--}}
{{--                        <h4>March 2011</h4>--}}
{{--                        <h4 class="subheading">An Agency is Born</h4>--}}
{{--                    </div>--}}
{{--                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>--}}
{{--                <div class="timeline-panel">--}}
{{--                    <div class="timeline-heading">--}}
{{--                        <h4>December 2012</h4>--}}
{{--                        <h4 class="subheading">Transition to Full Service</h4>--}}
{{--                    </div>--}}
{{--                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="timeline-inverted">--}}
{{--                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>--}}
{{--                <div class="timeline-panel">--}}
{{--                    <div class="timeline-heading">--}}
{{--                        <h4>July 2014</h4>--}}
{{--                        <h4 class="subheading">Phase Two Expansion</h4>--}}
{{--                    </div>--}}
{{--                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="timeline-inverted">--}}
{{--                <div class="timeline-image">--}}
{{--                    <h4>--}}
{{--                        Be Part--}}
{{--                        <br />--}}
{{--                        Of Our--}}
{{--                        <br />--}}
{{--                        Story!--}}
{{--                    </h4>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src={{asset("assets/img/team/bro.jpg")}} alt="" />
                    <h4>Tahmid</h4>
                    <p class="text-muted"></p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src={{asset("assets/img/team/me.jpg")}} alt="" />
                    <h4>Renesa</h4>
                    <p class="text-muted"></p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"></p></div>
        </div>
    </div>
</section>
<!-- Clients-->
{{--<div class="py-5">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3 col-sm-6 my-3">--}}
{{--                <a href="#!"><img class="img-fluid d-block mx-auto" src={{asset("assets/img/logos/envato.jpg")}} alt="" /></a>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6 my-3">--}}
{{--                <a href="#!"><img class="img-fluid d-block mx-auto" src={{asset("assets/img/logos/designmodo.jpg")}} alt="" /></a>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6 my-3">--}}
{{--                <a href="#!"><img class="img-fluid d-block mx-auto" src={{asset("assets/img/logos/themeforest.jpg")}} alt="" /></a>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6 my-3">--}}
{{--                <a href="#!"><img class="img-fluid d-block mx-auto" src={{asset("assets/img/logos/creative-market.jpg")}} alt="" /></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Contact-->
{{--<section class="page-section" id="contact">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center">--}}
{{--            <h2 class="section-heading text-uppercase">Contact Us</h2>--}}
{{--            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
{{--        </div>--}}
{{--        <form id="contactForm" name="sentMessage" novalidate="novalidate">--}}
{{--            <div class="row align-items-stretch mb-5">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />--}}
{{--                        <p class="help-block text-danger"></p>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />--}}
{{--                        <p class="help-block text-danger"></p>--}}
{{--                    </div>--}}
{{--                    <div class="form-group mb-md-0">--}}
{{--                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />--}}
{{--                        <p class="help-block text-danger"></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group form-group-textarea mb-md-0">--}}
{{--                        <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>--}}
{{--                        <p class="help-block text-danger"></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="text-center">--}}
{{--                <div id="success"></div>--}}
{{--                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<!-- Portfolio Modals-->
<!-- Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Abstract Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img  class="col-sm-8" src={{asset("assets/img/catagories/abstract/ab2.jpg")}} alt="" />

{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}

                            <a href="{{url('abstract')}}"  class="btn btn-primary" class="btn btn-info" role="button">Click Here to see more photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Nature Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" class="col-sm-8" src="assets/img/catagories/nature/n3.jpg" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Explore</li>--}}
{{--                                <li>Category: Graphic Design</li>--}}
{{--                            </ul>--}}
{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}

                            <a href="{{url('nature')}}"   class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Sports/Action Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" class="col-sm-6" src="assets/img/catagories/sports/sp2.jpg" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Finish</li>--}}
{{--                                <li>Category: Identity</li>--}}
{{--                            </ul>--}}
                                <a href="{{url('sports')}}" class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Wildlife Photography</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/catagories/wild/w7.jpg" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Lines</li>--}}
{{--                                <li>Category: Branding</li>--}}
{{--                            </ul>--}}
{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}
                            <a href="{{url('wild')}}" class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Black & White Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/catagories/b&w/b9.jpeg" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Southwest</li>--}}
{{--                                <li>Category: Website Design</li>--}}
{{--                            </ul>--}}
{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}
                            <a href="{{url('bw')}}"class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Fashion Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/catagories/fashion/f6.png" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Window</li>--}}
{{--                                <li>Category: Photography</li>--}}
{{--                            </ul>--}}
{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}
                            <a href="{{url('fashion')}}" class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 7-->
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src={{asset("assets/img/close-icon.svg")}}/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Adventure Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" src={{asset("assets/img/catagories/adventure/ad7.jpg")}} alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Threads</li>--}}
{{--                                <li>Category: Illustration</li>--}}
{{--                            </ul>--}}
{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}
                            <a href="{{url('adventure')}}"class="btn btn-primary"  class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 8-->
<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Potrait Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" class="col-sm-6" src="assets/img/catagories/potrait/pot1.jpg" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Explore</li>--}}
{{--                                <li>Category: Graphic Design</li>--}}
{{--                            </ul>--}}
{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}
                            <a href="{{url('potrait')}}"class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 9-->
<div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Architectural Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" class="col-sm-6" src="assets/img/catagories/architectural/ar10.jpg" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Finish</li>--}}
{{--                                <li>Category: Identity</li>--}}
{{--                            </ul>--}}
                            <a href="{{url('architectural')}}" class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 10-->
<div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Candid Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" class="col-sm-6" src="assets/img/catagories/candid/can6.jpg" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Lines</li>--}}
{{--                                <li>Category: Branding</li>--}}
{{--                            </ul>--}}
{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}
                            <a href="{{url('candid')}}"  class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 11-->
<div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Cityscape Photography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" class="col-sm-6" src="assets/img/catagories/cityscape/city4.jpg" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Southwest</li>--}}
{{--                                <li>Category: Website Design</li>--}}
{{--                            </ul>--}}
{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}
                            <a href="{{url('city')}}" class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 12-->
<div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Astrography</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" class="col-sm-6" src="assets/img/catagories/astro/as7.jpg" alt="" />
{{--                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Window</li>--}}
{{--                                <li>Category: Photography</li>--}}
{{--                            </ul>--}}
{{--                            <button class="btn btn-primary" data-dismiss="modal" type="button">--}}
{{--                                <i class="fas fa-times mr-1"></i>--}}
{{--                                Close Project--}}
{{--                            </button>--}}
                            <a href="{{url('astrography')}}" class="btn btn-primary" class="btn btn-info" role="button" style="color: white; background-color: #3d3e47">Click Here to see more photos</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src={{asset("assets/mail/jqBootstrapValidation.js")}}></script>
<script src={{asset("assets/mail/contact_me.js")}}></script>
<!-- Core theme JS-->
<script src={{asset("js/scripts.js")}}></script>
</body>
</html>
