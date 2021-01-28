<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeKeeper</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>

<body>
    <section class="satu mb-5">
        <div class="header-background">
            <div class="container">
                <header class="header">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href=" {{url('/')}}"><img
                                    src="assets/img/HomeKeeper_Logo_InCloud.png" alt=""></a>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{url('/news')}}">BLOG</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            TOUR
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{url('/features')}}">FEATURES</a></li>
                                            <li><a class="dropdown-item" href="{{url('/screenshots')}}">SCREEN SHOTS</a></li>
                                            <li><a class="dropdown-item" href="">TAKE A TOUR</a></li>
                                            <li><a class="dropdown-item" href="">TAKE A TEST DRIVE</a></li>
                                            <li><a class="dropdown-item" href="">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item active dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            WHY HOMEKEEPER
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{url('/peopleloveus')}}">PEOPLE LOVE US</a></li>
                                            <li><a class="dropdown-item" href="{{url('/housingcounseling')}}">HOUSING COUNSELING</a></li>
                                            <li><a class="dropdown-item" href="#">IMPACT MEASUREMENT</a></li>
                                            <li><a class="dropdown-item" href="#">ONLINE PROGRAM FORMS</a></li>
                                            <li><a class="dropdown-item" href="#">AWESOME SUPPORT</a></li>
                                            <li><a class="dropdown-item" href="#">POWERED BY SALESFORCE</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active active" aria-current="page" href="{{url('/pricing')}}">PRICING</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            ABOUT US
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{url('/ourhistory')}}">OUR HISTORY</a></li>
                                            <li><a class="dropdown-item" href="{{url('/ourteam')}}">OUR TEAM</a></li>
                                            <li><a class="dropdown-item" href="#">OUR PARTICIPATING ORGANIZATIONS</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">OUR VIDEOS</a></li>
                                            <li><a class="dropdown-item" href="#">OUR LATEST NEWS</a></li>
                                            <li><a class="dropdown-item" href="#">CONTACT US</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle signup" href="#"
                                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            SIGN UP
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">BECOME A HOMEKEEPER ORGANIZATION</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">PRICING - 2020 HOMEKEEPER FEE
                                                    SCHEDULE</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">2020 TRAINING AND SUPPORT SCHEDULE
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </nav>
                    <div class="caption">
                        <h1>We make your job easier and your programs better</h1>
                        <a href="#" class="button">TAKE A TOUR</a>
                    </div>
                </header>
            </div>
        </div>
    </section>
    <section class="dua mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="title text-center pb-5">What is HomeKeeper?</h1>
                    <p>Homekeeper is a web-based app designed for busy people like you that manage affordable
                        homeownership and housing counseling program. Join others who have made the switch to Homekeeper
                        and heaven't looked back since. wheter you manage a small, growing or large program, you can't
                        afford to be running your programs any other way.</p>
                    <a href="" class="btn">LEARN MORE</a>
                </div>
                <div class="col-sm-6">
                    <img src="assets/img/Hello-Housing-2.png" alt="" class="img">
                </div>
            </div>
            <br>
            <br>
            <hr>
        </div>
    </section>
    <section class="tiga">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="assets/img/industry.png" alt="gambar" class="w-100">
                </div>
                <div class="col-sm-6">
                    <h1 class="title text-center pb-5">Why Homekeeper?</h1>
                    <p>Homekeeper is part of our ambitious effort at the local, regional, and national level to not
                        only
                        improve program management practice, but also collectively measure impact.</p>
                    <p>We make your job easier by simplifying program administration, centralizing notes and taks,
                        and
                        by giving you the ability to quickly retrieve key data. You program are made better by our
                        use
                        of industry data best practices. prevention of instutional memory loss and the ability to
                        report
                        your impact in real time.</p>
                    <a href="" class="btn">LEARN MORE</a>

                </div>
            </div>


            <br>
            <br>
            <hr>
        </div>
    </section>
    <section class="empat pb-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center">FEATURES</h1>
                <div class="col-sm-6">
                    <div class="content">
                        <img src="assets/img/homeownership-heading.png" alt="" class="w-50">
                        <ul>
                            <li>
                                <a href="">Track your homeowner applications</a>
                            </li>
                            <li>
                                <a href="">Manage your property portfolio</a>
                            </li>
                            <li>
                                <a href="">Standardize record keeping</a>
                            </li>
                            <li>
                                <a href="">Log homeowner support activities</a>
                            </li>
                            <li>
                                <a href="">Create custom reports and dashboards</a>
                            </li>
                            <li>
                                <a href="">Benchmark your succes</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <img src="assets/img/housing-counseling.png" alt="" class="w-50">
                        <ul>
                            <li>
                                <a href="">1-1 conseling and workshop tracking </a>
                            </li>
                            <li>
                                <a href="">Keep detailed data on clients and cases</a>
                            </li>
                            <li>
                                <a href="">Audit files for completeness and correctness</a>
                            </li>
                            <li>
                                <a href="">Submit quarterly, HUD 9902 reports</a>
                            </li>
                            <li>
                                <a href="">Track counselor continung education</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>



    </section>
    <section class="lima">
        <div class="container">
            <div class="title text-center pb-5">
                <h1>People Love Us</h1>
                <p>Our users are pretty with Homekeeper But dont just take our word for it. Read on and learn what they
                    have
                    to say</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img src="assets/img/MNCLTN-2.jpg" alt="logo">
                </div>
                <div class="col-sm-6">
                    <img src="assets/img/Hello-Housing-2.png" alt="logo">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>" Since adoption. Homekeeper has become "an indispanbsable application" for us. We no longer have
                        multiple speradsheets managing all the information. it has simplified our operation with more
                        accurate real-time information. The data was useful for identifiying gaps in our invesment side
                        and has lead to partnership that impact our targeted demografics</p>
                    <span>READ MORE</span>
                </div>
                <div class="col-sm-6">
                    <p>"We worked with Homekeeper and franklin joyce to re design our process in the face of increase
                        demand. instead of having everyone submit what is essentialy an inch thick folder of documents
                        we broke it in to steps. The end result was that we saved at last 200 hours of staff time with
                        online application"</p>
                    <span>READ MORE</span>
                </div>
                <a href="" class="testimoni text-center mt-5 btn">MORE TESTIMONIALS</a>
            </div>
            <br>
            <br>


        </div>
    </section>
    <section class="enam">
        <p class="text-center">cant wait one of our fublic demos? contacs us a custom demo for your organization</p>
        <div class="container">
            <main class="enam">
                <div class="img">
                    <img src="assets/img/HomeKeeper_Logo_InCloud.png" alt="logo">
                </div>
                <div class="content">

                    <ul class="menu-footer">
                        <li>BLOG</li>
                        <li>
                            <a href="">TOUR</a>
                            <ul>
                                <li>Features</li>
                                <li>Screen Shoots</li>
                                <li>Take a tour</li>
                                <li>Take a test drive</li>
                                <li>FAQ</li>
                            </ul>
                        </li>
                        <li>
                            <a href="">My Homekeeper </a>
                            <ul>
                                <li>People love us</li>
                                <li>Housing counseling</li>
                                <li>Impact measurement</li>
                                <li>Online programs form</li>
                                <li>Awesome support</li>
                            </ul>
                        </li>
                        <li>
                            <a href="">About us</a>
                            <ul>
                                <li>Our Team</li>
                                <li>Our Patnership</li>
                                <li>Our History</li>
                                <li>Our Philosopy</li>
                                <li>Our Lates news</li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Sign Up</a>
                            <ul>
                                <li>Become a Homekeeper</li>
                                <li>Organization</li>
                                <li>Training and Support</li>
                                <li>Schedule</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </main>


        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="assets/img/grounded-solution.png" alt="logo" class="img-footer w-50">
                    </div>
                    <div class="col-sm">
                        <p>&copy;2020 Homekeeper, a program of grounded solutions network </p>
                        <p>website design indi tech solution | term of us</p>
                    </div>
                    <div class="col-sm">
                        <img src="assets/img/salesforce.png" alt="logo w-50">
                        <p>Available On</p>
                        <p>Sales Force App Exchange</p>
                    </div>

                </div>
            </div>

        </footer>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
