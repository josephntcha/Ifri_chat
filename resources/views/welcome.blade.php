{{-- 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ifri Networking</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="asset/favicon.ico" />
        <!-- Liens ajouter -->
        <link href="../../asset/css/styles.css" rel="stylesheet" type="text/css" />
        <link href="../../asset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../asset/css/bootstrap.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <main class="flex-shrink-0">
            <!-- bar de navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">IFRI NetWorking</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder d-flex align-items-center">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about-section">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="nav-item ms-2">
                                @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill" >Se connecter</a>
                
                                    @endauth
                                </div>
                            @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- header -->
            <header class="py-5">
                <img src="asset/img/office-2717014.jpg" class="img-fluid" alt="Votre image">
                <div>
                    <p id="p1">IFRI NETWORKING</p>
                    <p id="p2">Le resaul social de l'Institut de Formation et de Recherche en Informatique</p>
                </div>
            </header> 

            <!-- Resume -->
            <section class="bg-light py-5" id="about-section">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">IFRI NetWorking</span></h2>
                                <p class="lead fw-light mb-4">Le reseau social interne d'ifri</p>
                                <p class="text-muted">
                                    IFRI NetWorking est un reseau social qui permet aux etudiants diplomes de 
                                    l'institut de rester en contact avec les membres de l'administration, d'avoir 
                                    acces a des offres de stage et d’emploi envoyées par IFRI, de discuter avec 
                                    des étudiants de sa promotion et de participer a des Événements et webinaires
                                </p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- boite modale -->
        
        </main>

        <!-- Pied de page -->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto text-center">
                        <div class="small m-0">Copyright &copy; IFRI NetWorking 2023</div>
                    </div>
                </div>
            </div>
        </footer>        

        <!-- lien java script -->
        <script src="asset/js_new/bootstrap.js"></script> <!-- bootstrap javascript -->
        <script src="asset/js_new/bootstrap.min.js"></script> <!-- bootstrap javascript -->
        <script src="asset/js_new/scripts.js"></script> <!-- script personnalise javascript -->
    </body>
</html> --}}
<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AlumniNet</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <script src="{{ asset('../custom-scripts.js') }}" defer></script>
</head>

<body>
  <main>
    <!-- Header Start -->
    <header>
      <nav class="nav container">
        <h2 class="nav_logo">
          <a href="index.html">
            <!-- <img src="images/in-web.jpg" alt="Logo" width="220px"> -->
            AlumniNet
          </a>
        </h2>

        <ul class="menu_items">
          <img src="{{ asset('images/times.svg') }}" alt="timesicon" id="menu_toggle" />
          <li><a href="#" class="nav_link">Home</a></li>
          <li><a href="#" class="nav_link">About</a></li>
          <!-- <li><a href="#" class="nav_link">Service</a></li>
          <li><a href="#" class="nav_link">Project</a></li>
          <li><a href="#" class="nav_link">Contact</a></li> -->
        </ul>
        <img src="{{ asset('images/bars.svg') }}" alt="timesicon" id="menu_toggle" />
      </nav>
    </header>
    <!-- Header End -->

    <!-- Hero Start -->
    <section class="hero">
      <div class="row container">
        <div class="column">
          <h2>Bienvenue sur IFRI Networking <br />Le reseau social d'IFRI</h2>
          <p>
            IFRI Networking est un reseau social uniquement concu pour faciliter 
            les interractions entre les membres de l'administration de l'institut
            et ses anciens etudiants.
          </p>
          <div class="buttons">
            <a href="connexion.html">
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill" >Se connecter</a>
                
                                    @endauth
                                </div>
                            @endif
            </a>
            <!-- <button class="btn">Contact Us</button> -->
          </div>
        </div>
        <div class="column">
          <img src="{{ asset('images/58976-removebg-preview.png') }}" alt="heroImg" class="hero_img" />
        </div>
      </div>
      <img src="{{ asset('images/bg-bottom-hero.png') }}" alt="" class="curveImg" />
    </section>
    <!-- Hero End-->
  </main>

  <script>
    const header = document.querySelector("header");
    const menuToggler = document.querySelectorAll("#menu_toggle");

    menuToggler.forEach(toggler => {
      toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
    });
  </script>
</body>

</html>
