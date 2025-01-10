<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFRI Networking Profile des Etudiants</title>

    <!-- liens css-->
    <link rel="icon" type="image/x-icon" href="{{ asset("images/logoifri.png") }}">
    <link rel="stylesheet" href="{{ asset("new/fontawesome_free_6_5_1_web/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("new/fontawesome_free_6_5_1_web/css/profileEtudiant.css") }}">
</head>

<body>
    <main>
        <div class="container">
            <div class="profile-card">
                <div class="profile-pic">
                    <h2>Photo de l'étudiant</h2> {{-- veuillez decommantez la ligne 21 et mettez l'image de l'étudiant. Après, commantez cette ligne --}}
                    {{-- <img src="{{asset("images/profile-18.jpg")}}" alt="user avatar"> --}}
                </div>

                <div class="profile-details">
                    <div class="intro">
                        <h2>{{ $user->name }}</h2>
                        <h4>INFORMATICIEN</h4>
                        <div class="social">
                            <a href="#"><i class="fab fa-facebook" style="color:var(--blue)"></i></a>
                            <a href="#"><i class="fab fa-twitter" style="color:var(--skyblue)"></i></a>
                            <a href="#"><i class="fab fa-dribbble" style="color:var(--dark-pink)"></i></a>
                            <a href="#"><i class="fab fa-linkedin" style="color:var(--light-blue)"></i></a>
                        </div>
                    </div>

                    <div class="contact-info">

                        <div class="row">
                            <div class="icon">
                                <i class="fa fa-briefcase" style="color:var(--light-purple)"></i>
                            </div>
                            <div class="content">
                                <span>Travaille</span>
                                <h5>{{ $user->poste }}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="icon">
                                <i class="fa fa-phone" style="color:var(--dark-magenta)"></i>
                            </div>
                            <div class="content">
                                <span>Contact</span>
                                <h5>+229 {{ $user->Numero_telephone }}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="icon">
                                <i class="fa fa-envelope-open" style="color:var(--light-green)"></i>
                            </div>
                            <div class="content">
                                <span>Email</span>
                                <h5>{{ $user->email }}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="icon">
                                <i class="fa fa-map-marker" style="color:var(--light-purple)"></i>
                            </div>
                            <div class="content">
                                <span>Localisation</span>
                                <h5>Adresse</h5>
                            </div>
                        </div>

                    </div>
                    <button class="download-btn"> <i class="fa fa-download"></i>  Telecharger CV</button>
                </div>
            </div>

            <div class="section">
                <div class="boutons">
                    <a href="{{ route('profile_compte',Auth::user()->id) }}" id="modificate" class="btn">
                        <i class="fas fa-pen-to-square"></i>
                        <h5>Mofifier profile</h5>
                    </a>

                    <a href="/index" class="btn">
                        <i class="fas fa-home"></i>
                        Retourner a l'accueil
                    </a>
                    <!-- <div id="accueil" class="btn">
                        <i class="fas fa-home"></i>
                        <h5></h5>
                    </div> -->
                </div>

                <div class="about">
                    <h1>About me</h1>

                    <p class="col-6 border border-dark "> 
                        {{ $user->description }}
                    </p>

                    <h2>What I Do !!!</h2>
                    <div class="work">
                        <div class="workbox">
                            <div class="icon">
                                <img src="images/ui.svg" alt="">
                            </div>
                            <div class="desc">
                                <h3>Expérience</h3>
                                <p>
                                    {{ $user->expérience }}
                                </p>
                            </div>
                        </div>

                        <div class="workbox">
                            <div class="icon">
                                <img src="images/app.svg" alt="">
                            </div>
                            <div class="desc">
                                <h3>Langage</h3>
                                <p>
                                    {{ $user->langage }}
                                </p>
                            </div>
                        </div>

                        <div class="workbox">
                            <div class="icon">
                                <img src="images/api.svg" alt="">
                            </div>
                            <div class="desc">
                                <h3>API Developement</h3>
                                <p>
                                </p>
                            </div>
                        </div>

                        <div class="workbox">
                            <div class="icon">
                                <img src="images/web.svg" alt="">
                            </div>
                            <div class="desc">
                                <h3>Web Developement</h3>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Lien Javascript -->
    <script src="js/profileEtudiant.js"></script>
</body>

</html>