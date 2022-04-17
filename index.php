<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio Rania</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style1.css" rel="stylesheet" />

</head>

<script>
    function onSubmit() {
        var user = {};
        user.name = document.getElementById("name").value;
        user.email = document.getElementById('email').value;
        user.phone = document.getElementById('phone').value;
        user.lastname = document.getElementById('lastname').value;
        user.objet = document.getElementById('subject').value;
        user.msg = document.getElementById('message').value;


        var boutons = document.getElementsByName('choix');

        for (var i = 0; i < boutons.length; i++) {
            if (boutons[i].checked) {
                valeur = boutons[i].value;
            }
            user.role = valeur;
        }


        console.log(user);
        localStorage.user = JSON.stringify(user);
        return false
    };
</script>

<body id="page-top">
    <?php

    session_start();
    $role = "";
    $name = "";
    if (isset($_SESSION["name"])) {
        $role = $_SESSION["role"];
        $name = $_SESSION["name"];
    }
    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span style="font-weight: bolder; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; text-transform:uppercase" class="d-block d-lg-none">Boughanmi Rania</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">My Web Development Work</a>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ContactMe">Contact me</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">My Location</a></li>
                <?php
                if (isset($_SESSION["name"]))  echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>';
                else echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Login</a></li>';
                if ($role == "Webmaster") echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="webmaster.php">Webmaster</a></li>';
                ?>

            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    Boughanmi
                    <span class="text-primary">Rania</span>
                </h1>
                <div class="subheading mb-5">
                    06 Rue el Fajr cité Ennakhla Bizerte,7000 ·
                    <a href="mailto:name@email.com">Boughanmirania@gmail.com</a>
                </div>
                <p class="lead mb-5">I'm a 2nd year engineering student specialized in Computer Science in the National Engineering School of Tunis(ENIT).
                    I've been working extensively to develop my skills and learn new techniques, I'm also a self taught in Docker, Kubernetes and GCP.
                    Lately I've been working on writing Docker files and deployment. On the other hand I'm still working on developing my programming skills through CP workshops.
                    I'm good at communicating with people and I like to work with teams and alone when needed. Here is my <A HREF="./moncv.php"><span <strong></strong>CV</span></A> to know more about me.</p>
                <div class="social-icons">
                    <a class="social-icon" href="https://www.linkedin.com/in/rania-boughanmi-3318111b4/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="https://www.facebook.com/ranya.boughanmi/"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

        </section>




        <hr class="m-0" />

        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">National Engineering School of Tunis</h3>
                        <div class="subheading mb-3">ICT Department</div>
                        <div>Computer Science </div>

                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">September 2020 - October 2023</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">IPEIEM</h3>
                        <div class="subheading mb-3">Mathematics and Physics</div>

                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">August 2018 - July 2020</span></div>
                </div>
            </div>
        </section>

        <hr class="m-0" />
        <!-- Skills-->
        <?php
        if ($role == "Enseignant")  echo '<section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">My Web Development Work</h2>
                    <div class="subheading mb-3">
                        <p class="mb-0">I share with you here some of the work we have done this year during the Web
                            Development Course.</p>
                    </div>
                    <button class="button button2" onclick="document.location=`./Html/ex8.html`">HTML</button>
                    <button class="button button2" onclick="document.location=`./application/application.html`">CSS</button>
                    <button class="button button2" onclick="document.location=`./javas/exercices.html`">Java Script</button>
                    <button class="button button2" onclick="document.location=`./jq/jq.html`">Jquery</button>
                    <button class="button button2" onclick="document.location=`./API/exercice5.1.html`">HTML5 API</button>
                </div>
            </section>';
        ?>
        <hr class="m-0" />
        <!-- Contact Me-->
        <section class="resume-section" id="ContactMe">
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">Contact Me</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="wrapper">
                                <div class="row no-gutters">
                                    <div class="col-md-6 d-flex align-items-stretch">
                                        <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                                            <h3 class="mb-4">Write us</h3>
                                            <div id="form-message-warning" class="mb-4"></div>
                                            <div id="form-message-success" class="mb-4">
                                                Your message was sent, thank you!
                                            </div>
                                            <form method="POST" id="contactForm" name="contactForm" class="contactForm" action="contactbd.php" onsubmit="onSubmit(this)">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label>Pofession(*):</label>
                                                            <input id="ET" name="choix" type="radio" required value="Etudiant">
                                                            Etudiant
                                                            <input id="EN" name="choix" type="radio" value="Enseignant" required>
                                                            Enseigant
                                                            <input id="ENT" name="choix" type="radio" value="Entreprise" required>
                                                            Entreprise
                                                            <input id="AUT" name="choix" type="radio" value="Autre" required>
                                                            AUTRE
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" value="Send Message" name="Bouton" class="btn btn-primary">
                                                            <div class="submitting"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                    <div class="col-md-6 d-flex align-items-stretch">
                                        <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                                            <h3>Contact information</h3>
                                            <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-map-marker"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Address:</span> 06 Rue el Fajr cité Ennakhla Bizerte,7000 ·</p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Phone:</span> <a href="tel://1234567920">+216 00000000</a></p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-paper-plane"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">Boughanmirania@gmail.com</a></p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-globe"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Website</span> <a href="#">ahlabik.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <script src="js/jquery.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/main.js"></script>

        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Find Me</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12773.899424725625!2d10.147424!3d36.831102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e7188efdc14caa7!2sNational%20Engineering%20School%20of%20Tunis!5e0!3m2!1sen!2stn!4v1635328144606!5m2!1sen!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>