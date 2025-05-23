{{-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset("asset/boot/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("asset/demo/default/base/connexion.css") }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="css/connexion.css">
    <title>IFRI Networking Connexion</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100 one">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #005fbd;">
                <div class="featured-image mb-3">
                    <img src="{{ asset("images/1.png") }}" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">IFRI Networking</p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Rejoin la communaute des anciens etudiants d'IFRI</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Bienvenue</h2>
                        <p>Connecter vous au compte Etudiant</p>
                    </div>
                    <form class="col-12 col-sm-12 col-md-12" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror" placeholder="Email" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group mb-1">
                            <input id="password"    type="password" name="password" class="form-control form-control-lg bg-light fs-6  @error('password') is-invalid @enderror" placeholder="Mot de passe">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Se rappeller de
                                        moi</small></label>
                            </div>
                            <div class="forgot" >
                                <small><a href="#" id="ad-pop">Mot de passe oublie ?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6"><a href="accueil.html" style="text-decoration: none; color: white;">Se Connecter</a></button>
                        </div>
                    </form>

                    
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6">
                            <!-- <img src="images/google.png" style="width:20px" class="me-2"> -->
                            <small><a href="dashboard.html" style="text-decoration: none; color: black;">Se connecter en tant que Administrateur</a></small>
                        </button>
                    </div>
                    <!-- <div class="row">
                        <small>Don't have account? <a href="#">Sign Up</a></small>
                    </div> -->
                </div>
            </div>

        </div>
    </div>

    <!-- ==================== Popup d'oublie de mot de passe ========================= -->
    <div class="c-popup">
        <div class="container">
            <div class="head">
                <h5>Mot de passe oublie ?</h5>
            </div>
            <p>Veuillez-vous rapprochez de l'administration d'IFRI pour avoir un nouveau mot de passe</p>
            <div>
                <button class="click">D'accord Merci</button>
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="{{ asset("asset/demo/default/base/connectPopup.js") }}"></script>
    <script src="{{ asset("asset/vendors/base/vendors.bundle.js") }}" type="text/javascript"></script>
    <script src="{{ asset("asset/demo/default/base/scripts.bundle.js") }}" type="text/javascript"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--==================== CSS ====================-->
         <link rel="stylesheet" href="{{ asset("new/fontawesome_free_6_5_1_web/css/all.min.css") }}">
         <link rel="stylesheet" href="{{ asset("new/fontawesome_free_6_5_1_web/css/style.css") }}">

        <title>IFRI-AlumniNetwork</title>

        <meta name="description" content="Le site officiel de L&#39;Institut de Formation et de Recherche en Informatique de L&#39;UAC">
    
        <meta name="keywords" content="IFRI, UAC, Informatique, Bénin, Recherche, Institut, Ecole, Ingenierie, Université, Sécurité Informatique, Génie Logiciel, Internet et Multimédia, Système d&#39;Information et rédeaux Informatiques, Ordinateur, Programmation, LRSIA, WICSI, IFRI ALUMNI">
        <meta name="author" content="Institut de Formation et de Recherche en Informatique">
        <meta name="robots" content="noodp">
        <link rel="canonical" href="http://www.ifri-uac.bj/">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Institut de Formation et de Recherche en Informatique - Université d&#39;Abomey-Calavi">
        <meta property="og:description" content="Le site officiel de L&#39;Institut de Formation et de Recherche en Informatique de L&#39;UAC ">
        <meta property="og:url" content="http://ifri-uac.bj">
        <meta property="og:site_name" content="Institut de Formation et de Recherche en Informatique - Université d&#39;Abomey-Calavi">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:description" content="Le site officiel de L&#39;Institut de Formation et de Recherche en Informatique de L&#39;UAC ">
        <meta name="twitter:title" content="Institut de Formation et de Recherche en Informatique - Université d&#39;Abomey-Calavi">

        <!--================= SITE ICON ===============-->
           <link rel="icon" type="image/x-icon" href="{{ asset("images/logoifri.png") }}">


        <!--==================== UNICONS ====================-->
         <link rel="stylesheet" href="{{ asset("new/fontawesome_free_6_5_1_web/css/line.css") }}">
        <!--================= CSS BOOTSTRAP ===============-->
        <!-- <link href="./Resultat IFRI_files/bootstrap.min.css" rel="stylesheet"> -->
        <link href="{{ asset("asset/boot/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

    

        <style>
            @font-face {
                font-family: 'monica-ext-font_YIBBBFG';
                src: url('chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/fonts/Hind-Light.otf');
                font-weight: 300;
                font-display: swap;
            }
            @font-face {
                    font-family: 'monica-ext-font_YIBBBFG';
                    src: url('chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/fonts/Hind-Regular.otf');
                    font-weight: 400;
                    font-display: swap;
                }
            @font-face {
                    font-family: 'monica-ext-font_YIBBBFG';
                    src: url('chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/fonts/Hind-Medium.otf');
                    font-weight: 500;
                    font-display: swap;
                }
            @font-face {
                    font-family: 'monica-ext-font_YIBBBFG';
                    src: url('chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/fonts/Hind-SemiBold.otf');
                    font-weight: 600;
                    font-display: swap;
                }
        </style>

    </head>

    <body class="col-xl-10 col-lg-12 mx-auto" >

        <div class="d-lg-block d-none">
            <div class="bg-green- text-mobile rounded text-white- p-3 pb-5 text-center text-4">
				Cet espace est destiné aux anciens étudiants de l'IFRI qui souhaitent se connecter au reseau social d'IFRI.
			</div>

            <div class="vstack p-2  px-4 banner mb-3 mx-3 shadow rounded bg-white- text-center p-3" style="margin-top: -35px;">
                <div class="text-center">
                    <a href="https://eresultat.ifri-uac.bj/" class="d-block d-md-none"><img src="{{ asset("images/logoifri.png") }}" class="logo" style="height: 100px;"></a>
                </div>

                <div class="hstack rounded">
                    <div class="hstack">
                        <a href="https://eresultat.ifri-uac.bj/" class="d-none d-md-block"><img src="{{ asset("images/logoifri.png") }}" class="logo" style="height: 100px;"></a>
                        <div class="mx-2 mt-1">
                            <h6 class="banner_ifri text-center">INSTITUT DE FORMATION ET DE RECHERCHE EN INFORMATQUE</h6>
                            <p class="text-center pb-0" style="font-style: italic; font-size: 12px; margin-bottom: 5px;">Nous bâtisons l'excellence</p>
                            <p class="text-center" style="font-size: 11px">BP : 526 COTONOU - TEL : <a href="tel:+22955028070" style="text-decoration: none; color: #000">(+229) 55028070</a> - Courriel : <a href="mailto:contact@ifri-uac.bj" style="text-decoration: none; color: #000">contact@ifri-uac.bj</a></p>
                        </div>
                    </div>
                    <div class="ms-auto d-none d-md-block">
                        <div class="vstack banner_ministere">
                            <span style="font-weight: 500;">UNIVERSITE D'ABOMEY-CALAVI</span>
                            <div class="banner_drapeau">
                                <div class="hstack" style="height: 8px">
                                    <div class="col" style="background-color: #5A9F69; height: 8px"></div>
                                    <div class="col" style="background-color: #DED843; height: 8px"></div>
                                    <div class="col" style="background-color: #BC6469; height: 8px"></div>
                                </div>
                            </div>
                            <span class="banner_ministere_bottom">
                                MNISTERE DE L'ENSEIGNEMENT SUPERIEUR ET DE LA RECHERCHE SCIENTIFIQUE
                            </span>
                        </div>
                    </div>
                    <div class="ms-4 d-none d-md-block">
                        <a href="https://www.uac.bj/" target="_blank"><img src="{{ asset("images/logouac.png") }}" class="logo" style="height: 80px;"></a>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="d-lg-none bg-light- mb-3 d-block">
			<div class="bg-green- text-mobile rounded text-white- p-3 pb-5 text-center text-4">
				Cet espace est destiné aux parents d'étudiants de l'IFRI qui souhaitent consulter les résultats de leur fils en ligne.
			</div>
			<div class="mx-3 shadow rounded bg-white- text-center p-3" style="margin-top: -40px;">
				<img src="{{ asset("images/logoifri.png") }}" class="logo mx-auto" style="height: 100px;">
				<h6 class="banner_ifri text-center">INSTITUT DE FORMATION ET DE RECHERCHE EN INFORMATQUE</h6>
                <p class="text-center pb-0" style="font-style: italic; font-size: 12px; margin-bottom: 5px;">Nous bâtisons l'excellence</p>
                <p class="text-center" style="font-size: 11px">BP : 526 COTONOU - TEL : <a href="tel:+22955028070" style="text-decoration: none; color: #000">(+229) 55028070</a> - Courriel : <a href="mailto:contact@ifri-uac.bj" style="text-decoration: none; color: #000">contact@ifri-uac.bj</a></p>
			</div>
		</div>


        <main class="bg-white" style="height: 82.5%;">
            <section class="login-page" style="font-family: Poppins;">
	        <div class="row shadow b-" style="min-height: 82.4vh; background: linear-gradient(#0077d2 50%, #0077d1 70.25%, #003c69 100%);">
                <div class="col-md-6 px-4 d-none d-lg-block bg-light- shadow">
                    <div class="row px-3 h-100">
                        <div class="my-auto px-4">
                            <h2 class="text-uppercase text-black- fw-bold" style="line-height: 45px">
                                Bienvenue sur le site d'acces au reseau<br>
                                social des anciens <br>
                                étudiants de l'IFRI.
                            </h2>
                            <p class="mt-4 text-secondary text-5 text-justify lh-lg">
                                L'acces au reseau est disponible après une connexion approuvée. Pour se connecter, il faut être un étudiant connaissant ses identifiants.
                                <!-- Ces résultats sont fournis et approuvés par l'Institut de Formation et de Recherche en Informatique. <br> -->

                                Connectez-vous en toute sécurisé et confidentialité. Merci !
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-white py-5">
                    <div class="row h-100">
                        <div class="col-md-6 col-lg-8 col-sm-8 col-10 my-auto mx-auto">
                            <h4 class="text-center" style="font-family: Poppins;">Connexion a IFRI Networking</h4>
                            <p class="text-center" style="font-family: Poppins;">Se connecter au compte de l'étudiant</p> <br>
                            
                            <!-- Remplacement de la méthode d'envoi par 'onsubmit' pour gérer la vérification avec JavaScript -->
                            <form  method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mt-4">
                                    <input type="email" class="form-control border-0" placeholder="Email"  name="email" required>
                                    <label for="email" class="input-group-text bg-white border-0"><i class="uil uil-user text-secondary fs-5"></i></label> 
                                </div>
                                <span class="error"></span>
            
                                <div class="input-group mt-4">
                                    <input type="password" class="form-control border-0" placeholder="Mot de passe" name="password" required>
                                    <label for="password" class="input-group-text bg-white border-0"><i class="uil uil-lock text-secondary fs-5"></i></label> 
                                </div>
                                <span class="error"></span>
            
                                <div class="float-end my-3">
                                    <span type="button" class="text-decoration-none text-white">Mot de passe oublié ?</span>
                                </div>
                                <div>
                                    <input type="submit" value="SE CONNECTER" class="login-button">
                                </div>
                            </form>
                            
                            
                            <!-- Espace pour afficher un message d'erreur si les identifiants sont incorrects -->
                            <p id="error-message" style="color: red;"></p>
                                    </div>
                                </div>
                            </div>
	        </div>

            <!-- Remove the container if you want to extend the Footer to full width. -->
                <div class="my-5">
                    <!-- Footer -->
                    <footer class="text-center text-lg-start text-white" style="background-color: #003c69">
                        <!-- Grid container -->
                        <div class="container p-4 pb-0">
                            <!-- Section: Links -->
                            <section class="">
                                <!--Grid row-->
                                <div class="row">
                                    <!-- Grid column -->
                                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                        <h6 class="text-uppercase mb-4 font-weight-bold">
                                        <a class="text-white" href="https://eresultat.ifri-uac.bj/admin/">IFRI</a>
                                            
                                        </h6>
                                        <p>
                                            La vocation de l'Institut de Formation et de Recherche en Informatique (IFRI) de l'Université d'Abomey-Calavi est de former des 
                                            apprenants capables de devenir des acteurs de solutions informatiques aux différents problèmes...
                                        </p>
                                    </div>
                                    <!-- Grid column -->
                        
                                    <hr class="w-100 clearfix d-md-none">
                        
                                    <!-- Grid column -->
                                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                                        <h6 class="text-uppercase mb-4 font-weight-bold">Activités</h6>
                                        <p>
                                            <a class="text-white" href="https://ifri-uac.bj/admission/">Admission</a>
                                        </p>
                                        <p>
                                            <a class="text-white" href="https://ifri-uac.bj/formations/">Formation</a>
                                        </p>
                                        <p>
                                            <a class="text-white" href="https://lrsia.ifri-uac.bj/">Laboratoire</a>
                                        </p>
                                        <p>
                                            <a class="text-white" href="https://ifri-uac.bj/cooperation/">Coopération</a>
                                        </p>
                                    </div>
                                    <!-- Grid column -->
                        
                                    <hr class="w-100 clearfix d-md-none">
                        
                                    <!-- Grid column -->
                                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                                        <h6 class="text-uppercase mb-4 font-weight-bold">
                                            Vie estudiantine
                                        </h6>
                                        <p>
                                            <a class="text-white" href="https://ifri-uac.bj/cultural-activities/">Activités culturelles</a>
                                        </p>
                                        <p>
                                            <a class="text-white" href="https://ifri-uac.bj/stage-alternance/">Stage et alternance</a>
                                        </p>
                                        <p>
                                            <a class="text-white" href="https://ifri-uac.bj/cultural-activities/">JEI/IFRI</a>
                                        </p>
                                        <p>
                                            <a class="text-white" href="https://ifri-uac.bj/wicsi/">WICSI</a>
                                        </p>
                                        
                                        <p>
                                            <a class="text-white" href="https://ifri-uac.bj/alumni/">Alumni</a>
                                        </p>
                                    </div>
                        
                                    <!-- Grid column -->
                                    <hr class="w-100 clearfix d-md-none">
                        
                                    <!-- Grid column -->
                                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                                    <p><i class="fas fa-home mr-3"></i>Université d'Abomey-Calavi - Campus, Rue Agro Maquis FSA</p>
                                    <p><i class="fas fa-envelope mr-3"></i> secretariat@ifri.uac.bj</p>
                                    <p><i class="fas fa-phone mr-3"></i> (+229) 55 02 80 70</p>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!--Grid row-->
                            </section>
                            <!-- Section: Links -->
                    
                            <hr class="my-3">
                    
                            <!-- Section: Copyright -->
                            <section class="p-3 pt-0">
                                <div class="row d-flex align-items-center">
                                    <!-- Grid column -->
                                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                                    <!-- Copyright -->
                                    <div class="p-3">
                                        Copyright SI/IFRI-UAC Décembre 2023
                                    </div>
                                    <!-- Copyright -->
                                    </div>
                                    <!-- Grid column -->
                        
                                    <!-- Grid column -->
                                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                                    <!-- Facebook -->
                                    <a target="_blank" href="https://web.facebook.com/Uac.Ifri/" class="btn btn-outline-light btn-floating m-1" role="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path>
                                        </svg>
                                    </a>
                        
                                    <!-- Instagram -->
                                    <a href="https://www.instagram.com/ifri.uac/" target="_blank" class="btn btn-outline-light btn-floating m-1" role="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path>
                                        </svg>
                                    </a>
                                    <!-- Youtube -->
                                    <a target="_blank" href="https://www.youtube.com/channel/UCp53uoRrWOsAzXDy-iuakOw" class="btn btn-outline-light btn-floating m-1" role="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408z"></path>
                                        </svg>
                                    </a>
                        
                                    <!-- LinkedIn -->
                                    <a href="https://www.linkedin.com/company/ifri-uac/" target="_blank" class="btn btn-outline-light btn-floating m-1" role="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4"></path>
                                        </svg>
                                    </a>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                            </section>
                            <!-- Section: Copyright -->
                        </div>
                        <!-- Grid container -->
                    </footer>
                    <!-- Footer -->
                </div>
                <style>
                    a{
                        text-decoration:none;
                    }
                </style>
                <!-- End of .container -->
            </section> 
        </main>

    <script src="{{ asset("asset/vendors/base/vendors.bundle.js") }}" type="text/javascript"></script>
    <script src="{{ asset("asset/demo/default/base/scripts.bundle.js") }}" type="text/javascript"></script>
       
    </div> 
</body>
</html>




