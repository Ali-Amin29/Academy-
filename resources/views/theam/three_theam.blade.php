<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/theam/theamthree.css') }}" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Ahmed Samir</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        {{-- background-image: url("../assets/img/header-bg.jpg"); --}}
 
     
        
        
        <header class="masthead" style="background-image:url(' {{ asset('About/'.$users->about_us->image1) }}')">
            <div class="container">
             
 
                <div class="masthead-subheading">Welcome with</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->

        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x" style="background-color:#FFC800;border-radius:50%">
                             <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Why We</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                         <span class="fa-stack fa-4x" style="background-color:#FFC800;border-radius:50%">
                             <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">What do we offer
                    </h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                         <span class="fa-stack fa-4x" style="background-color:#FFC800;border-radius:50%">
                             <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Maldini's best</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">All games</h2>
                    <h3 class="section-subheading text-muted">We have the best games at the republic level</h3>
                </div>
                <div class="row">
                    @foreach ($users->game as $game )
               
                            
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal"
                             href="{{ url('details_game',$game->id) }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        
                                        <i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img src="{{ asset('Gemes/'.$game->photo) }}" class="img-fluid" alt="" srcset="">

                             </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{  $game->name }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $game->descrption1 }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- About-->
         

        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                 
                    
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('About/'.$users->about_us->image1) }}" style="height: 156px"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>@php
                                    $x=explode(" ",$users->about_us->created_at );
                                     echo $x[0];
                                @endphp</h4>
                                <h4 class="subheading">who we</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">  {{ $users->about_us->descrption }}</p></div>
                        </div>
                      
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('About/'.$users->about_us->image2) }}" style="height: 156px"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>@php
                                     echo $x[0]
                                @endphp</h4>
                                <h4 class="subheading">About some Swimme</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> {{ $users->about_us->descrption  }}</p></div>
                        </div>
                    </li>
                   
             
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our  Team</h2>
                    <h3 class="section-subheading text-muted">We have the best Team at the republic level
                    </h3>
                </div>
                <div class="row">
                    @foreach ($users->team as $team )

                    
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('Team/'.$team->photo) }}" alt="..." />
                            <h4>{{ $team->name }}</h4>
                            <p class="text-muted">{{ $team->descrption }}</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://yandex-images.clstorage.net/9tKGm6431/b7db7aw-/aDjD6CxtfjJA0YN6dDIRlSyzsMd9eIoRgwYeeuF6OyRcv7WQEYiuOjhSOwJV2tiy9Rhx9TVTm8G5d4Murt2dus0M1vz4qRpT1ZSnS-FykaV8kmUTTGlPscbXul8km2vx_H_l0USNbyqIRrpCsIw-VadPdwKjIRzGS6OWW86N6U54GVMqn4hddBDQgm3FQMHUPEEnBS-bLkBn5Z8NxJs_Mcvrw4dmrYzcmsQYZHSs3JS3jxbgsxPcheoS1pufbilZuzljWe1_L5QDIEKspCOTNT-AV6bPGEyBdiY8vydonmCbujG2dM1fbUjXakX2vaw0Jz20sgLCLNRpUFTLzH_qGmm70OmN3r4kUDFgzuaw8Rb942bmj-sfQwa3_V1Ui28AefhhRZbM3b-6p5vFxV2tZXcMxOLSYv3EWkCH2h7feGmYyoO6b00_lMBioM-nYFBnvmIVpW5KjUMkFS6OJGlsc8rqMbYFnN4OW7Yp5GQMTzUkbXVQIuAO9kvwpJhfXMr6S6nQmHyu_SSCkJKedPDiNMxit4TOas_gVdcufqSpzAAJaJL35C6M3CimqFZGvR_1p9-2gRCSzmabYpcJj71qe4jJAuk87u4lImNTffYgMZVcEwTkz2ls0HYV_5x2qq9iGMiidUffXQx7lLk2Zy3stjcPhHMDU16miwFkCw5dCohKW9LZPy4cd7FTAy720MLUfYDnBxwrfrNENK1tpjkdIenYcPZ1PP8tirWJdPc-nsclL5dhQTAPlInDdumOHirqezrjSe6NTdaBgoB9B-OTJ6xzJ7dtSJ4QZ5edP8aK_uPL-pAl1M0836rkOOT0Pu7H5H1FkVMTrbab0JY73czqObi6k4ncTM23kXCCPkfw4Fee8EZmvni-MVanHO8EWk7T-uiRZZcOPq5a92nmJsz-hwWfF3Jyk77HiWOXKY7_OHhKWMCrziyulbEiQrz2ohM2DJC09wx7fPAnZm0N9Ape4" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.google.com/?hl=ar"><img class="img-fluid img-brand d-block mx-auto" src="https://avatars.mds.yandex.net/i?id=edbacad37058815aee75103ad28a109a8f564600-5644618-images-thumbs&n=13&exp=1" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://web.facebook.com/"><img class="img-fluid img-brand d-block mx-auto" src="https://i.pinimg.com/originals/a7/9b/68/a79b687ea194584379449e01fb63401b.png" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://avatars.mds.yandex.net/i?id=65029d6c2272eb7cd62f51c035c3a481284d6ec5-7069324-images-thumbs&n=13&exp=1 alt="... aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website Ahmed Samir</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/theam_three.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>