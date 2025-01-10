{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/" type="image/x-icon">
    <title>AluminiNet</title>
    
    <!-- Links -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("new/fontawesome_free_6_5_1_web/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("new/style.css") }}">
</head>

<body>
    <!-- Header -->
    <nav>
        <div class="container">
            <h2 class="logo">
                AluminiNet
            </h2>
            <div class="search-bar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" placeholder="Search for">
            </div>
           
            <div class="create">
                <div class="profile-picture">
                    <img src="{{ asset("new/images/uac.jpg") }}" alt="User Profile">
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="left">
                <a class="profile">
                    <div class="profile-picture">
                        <img src="{{ asset("new/images/profile-1.jpg") }}" alt>
                    </div> <div class="online"></div>
                    <div class="handle">
                        <h4>{{ Auth()->user()->name }}</h4>
                     
                    </div>
                </a>
                <div class="sidebar">
                    <a href="/index" class="menu-item active">
                        <span><i class="fas fa-house"></i></span>
                        <h3>Home</h3>
                    </a>
                    <a href="/entretien" class="menu-item active">
                        <span style="margin-left: 27px"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                          </svg></span>
                        <h3>Entretien</h3>
                    </a>
                    <a href="/users" class="menu-item active">
                        <span><i class="fas fa-user-friends"></i></span>
                        <h3>Friends</h3>
                    </a>
                    <a href="{{ route('message_for_me',Auth::user()->id) }}" class="menu-item active">
                        <span><svg class="info" xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                          </svg></span>
                        <h3>Info-IFRI</h3>
                    </a>
                    <a href="/message_to_ifri" class="menu-item active">
                        <span><i class="fas fa-briefcase"></i></span>
                        <h3>Message Ifri</h3>
                    </a>
                    <a class="menu-item active" id="notifications">
                        <span>
                            <i class="fas fa-bell">
                                <small class="notification-count">9+</small>
                            </i>
                        </span>
                        <h3>Notifications</h3>

                        <!----------- Notifications popup ----------->
                        <div class="notification-popup">
                            <div>
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/profile-2.jpg") }}">
                                </div>
                                <div class="notification-body">
                                    <b>ISSA Rachi</b> accepted your firnd
                                    request
                                    <small class="text-muted">now</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/profile-3.jpg") }}">
                                </div>
                                <div class="notification-body">
                                    <b>Huguette TONON</b> liked your post
                                    <small class="text-muted">3 days
                                        ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/profile-4.jpg") }}">
                                </div>
                                <div class="notification-body">
                                    <b>Ife Tokpa</b> commented on your post
                                    <small class="text-muted">1 month
                                        ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/profile-5.jpg") }}">
                                </div>
                                <div class="notification-body">
                                    <b>Ronald Ground</b> commented on a post
                                    your tagged
                                    <small class="text-muted">3 month
                                        ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/profile-6.jpg") }}">
                                </div>
                                <div class="notification-body">
                                    <b>Bachirou Y. Dash</b> accepted your
                                    friend request
                                    <small class="text-muted">1 year
                                        ago</small>
                                </div>
                            </div>
                        </div>
                        <!----------- END Notifications popup ----------->
                    </a>
                    <a href="/chat" class="menu-item active" id="message-notifications">
                        <span>
                            <i class="fa-brands fa-facebook-messenger">
                                <small class="notification-count">6</small>
                            </i>
                        </span>
                        <h3>Message</h3>
                    </a>
                    <a class="menu-item active" id="theme">
                        <span><i class="fas fa-palette"></i></span>
                        <h3>Theme</h3>
                    </a>
                  
                </div>
                <!-- ------------- END Sidebar ------------ -->
            </div>
            
            <div class="middle">
                <div class="ingo">
                    <h3>Institut de Formation et de Recherche en Informatique</h3>
                    <small>Liste des publications faites par IFRI</small>
                </div>
                <div class="feeds">
                    @foreach ($publication as $item)
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/ifri.jpg") }}">
                                </div>
                                <div class="ingo">
                                    <h3>Institut de Formation et de Recherche en Informatique</h3>
                                    <small></small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="{{ asset("public/asset/clients/documents/".$item->image) }}">
                        </div>
                        <h3>contenu</h3>
                        <div class="text-center text-info" style="font-family: 'Inter', sans-serif;">
                            {{ $item->contenu }}
                        </div>
                       
                       
                    </div>
                    @endforeach
                  
                    
                </div>
                <!-- ------------- END Feeds ------------ -->
            </div>
            <!-- ============= END main middle =============== -->

            <!-- ============= main right =============== -->
            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4>
                    </div>
                    <!-- ---------- Search Bar ---------- -->
                    <div class="search-bar">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="search" placeholder="Search message" id="message-search">
                    </div>
                    <!-- ---------- Messages categories ---------- -->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(7)</h6>
                    </div>
                    <!-- ---------- Message ---------- -->
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-2.jpg") }}">
                        </div>
                        <div class="message-body">
                            <h5>Eden Quist</h5>
                            <p class="text-muted">Just woke up</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-3.jpg") }}">
                           
                        </div>
                        <div class="message-body">
                            <h5>Micha Loren</h5>
                            <p class="text-bold">3 news messages</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-4.jpg") }}">
                        </div>
                        <div class="message-body">
                            <h5>Ben Laden</h5>
                            <p class="text-muted">Are you Kamikaze</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="images/profile-5.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Fish Carp</h5>
                            <p class="text-muted">It's raining</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-6.jpg") }}">
                        </div>
                        <div class="message-body">
                            <h5>Julie Mireille</h5>
                            <p class="text-muted">I'm joking</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-7.jpg") }}">
                           
                        </div>
                        <div class="message-body">
                            <h5>Roberta Dinero</h5>
                            <p class="text-bold">Happy Birthday</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="customize-theme">
        <div class="card">
            <h2>Cutomize your view</h2>
            <p class="text-muted">Manage your font size; color and background</p>
           
            <!-- Font size -->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>
            
            <!-- Primary color -->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                </div>
            </div>

            <!-- Background Color -->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Lights Out</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript links -->
    <script src="{{ asset("new/main.js") }}"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>IFRI Networking</title>
    
    <!-- Links -->
     <!--================= SITE ICON ===============-->
    <link rel="icon" type="image/x-icon" href="{{ asset("images/logoifri.png") }}">
    <link rel="stylesheet" href="{{ asset("new/fontawesome_free_6_5_1_web/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("new/generalStyles.css") }}">
    <link rel="stylesheet" href="{{ asset("new/accueil.css") }}">
    <link rel="stylesheet" href="{{ asset("new/custom.css") }}">
</head>

<body>
    <!--  Header section de navigation -->
    <nav>
            <!-- La classe "container" est probablement utilisée pour définir une largeur maximale et centrer le contenu -->
            <div class="container">
                <!-- La balise <h2> avec la classe "logo" représente le logo du site ou de l'application -->
                    <h2 class="logo">
                        
                        <img src="{{ asset("new/images/in-web.jpg") }}" alt="User Profile">
                    </h2>
                <!-- La classe "search-bar" contient une barre de recherche avec une icône de loupe et un champ de recherche -->
                <div class="search-bar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" placeholder="Rechercher">
                </div>
                <!-- La classe "create" contient un bouton "Create" et une section pour le profil de l'utilisateur avec une image -->
                <div class="create">
                    <label class="btn btn-primary" for="create-post">Create</label>
                 
                        <!-- L'image du profil de l'utilisateur -->
                        <a href="profileEtudiant.html"><span><i class="fas fa-user"></i></span></a>
                       

                        <!-- menu popup mdu profile -->
                  
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end mr-5" aria-labelledby="navbarDropdown">
                         
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('deconnexion') }}                                    
                            </a>
                              
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
              
            </div>
    </nav>
    

    <!-- MAIN -->
    <main>
        <div class="container">
            <!-- ============= main left =============== -->
            <div class="left">
                <div class="profile">
                    <div class="profile-picture">
                        <a href="profileEtudiant.html"><img src="{{ asset("new/images/profile-1.jpg") }}" alt>

                    </div>
                    <div class="handle">
                        <h4>{{ Auth()->user()->name }}</h4>
                        <p class="text-muted">
                            Developpeur Web
                        </p>
                    </div>
                </div>
                <!-- ------------- Sidebar ------------ --> 
                <div class="sidebar">
                    <a href="/index" class="menu-item active">
                        <span><i class="fas fa-house"></i></span>
                        <h3>Accueil</h3>
                    </a>
                    <a href="/entretien" class="menu-item">
                        <span><i class="fas fa-user-friends"></i></span>
                        <h3>Entretien</h3>
                    </a>
                    <a href="/users" class="menu-item">
                        <span><i class="fas fa-user-friends"></i></span>
                        <h3>Amis</h3>
                    </a>
                    <a href="{{ route('message_for_me',Auth::user()->id) }}" class="menu-item">
                        <span><svg class="info" xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                          </svg></span>
                        <h3>Info-IFRI</h3>
                    </a>
                    <a href="{{ route('profile_dashboard',Auth::user()->id) }}" class="menu-item">
                        <span><i class="fas fa-user"></i></span>
                        <h3>Profile</h3>
                    </a>
                    <a href="/message_to_ifri" class="menu-item" id="message-notifications">
                        <span>
                            <i class="fa-brands fa-facebook-messenger">
                                <small class="notification-count">6</small>
                            </i>
                        </span>
                        <h3>Message</h3>
                    </a>
                    <a class="menu-item " id="notifications">
                        <span>
                            <i class="fas fa-bell">
                                <small class="notification-count"></small>
                            </i>
                        </span>
                        <h3>Notifications</h3>

                        <!----------- Notifications popup ----------->
                        <div class="notification-popup">
                            <div class="heading">
                                <h4>Notifications</h4><i class="fas fa-ellipsis"></i>
                            </div>
                            <div class="notification-item">
                                <div class="profile-picture">
                                    <img src="images/profile-2.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Thomas Martin</b> accepted your firnd
                                    request
                                    <small class="text-muted">now</small>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="profile-picture">
                                    <img src="images/profile-3.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Anna Lopez</b> liked your post
                                    <small class="text-muted">3 days
                                        ago</small>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="profile-picture">
                                    <img src="images/profile-4.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Kevin Dubois</b> commented on your post
                                    <small class="text-muted">1 month
                                        ago</small>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="profile-picture">
                                    <img src="images/profile-5.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Laura Nguyen</b> commented on a post
                                    your tagged
                                    <small class="text-muted">3 month
                                        ago</small>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="profile-picture">
                                    <img src="images/profile-6.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Antoine Lefevre</b> accepted your
                                    friend request
                                    <small class="text-muted">1 year
                                        ago</small>
                                </div>
                            </div>
                        </div>
                        <!----------- END Notifications popup ----------->
                    </a>
                    <a href="offre.html" class="menu-item">
                        <span><i class="fas fa-briefcase"></i></span>
                        <h3>Offres</h3>
                    </a>
                 
                    <a class="menu-item" id="theme">
                        <span><i class="fas fa-palette"></i></span>
                        <h3>Theme</h3>
                    </a>
                    <a href="setting.html" class="menu-item">
                        <span><i class="fas fa-gear"></i></span>
                        <h3>Parametres</h3>
                    </a>
                </div>
                <!-- ------------- END Sidebar ------------ -->
            </div>
            <!-- ============= END main left =============== -->

            <!-- ============= main middle =============== -->
            <div class="middle">
                <!-- ------------- Create Post ------------ -->
                <form id="postfield" name="postfield" class="create-post">
                    <div class="profile-picture">
                        <img src="{{ asset("new/images/profile-1.jpg") }}" alt>

                    </div>
                    <input type="text" placeholder="Quoi de neuf ?" id="create-post">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>
                <!-- ------------- END Create Post ------------ -->

                <!-- ------------- Feeds ------------ -->
                
                <div class="feeds">
                    <br>
                    <h5>PUBLICATIONS</h5>
                    @foreach ($publication as $item)
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/ifri.jpg") }}">
                                </div>
                                <div class="ingo">
                                    <h3>Institut de Formation et de Recherche en Informatique</h3>
                                    <small></small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="{{ asset("public/asset/clients/documents/".$item->image) }}">
                        </div>
                        <h3>contenu</h3>
                        <div class="text-center text-info" style="font-family: 'Inter', sans-serif;">
                            {{ $item->contenu }}
                        </div>
                       
                       
                    </div>
                    @endforeach
                  
                    
                </div>
                <!-- ------------- END Feeds ------------ -->
            </div>
            <!-- ============= END main middle =============== -->

            <!-- ============= main right =============== -->
            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4><i class="fas fa-ellipsis"></i>
                    </div>
                    <!-- ---------- Search Bar ---------- -->
                    <div class="search-bar">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="search" placeholder="Search messages" id="message-search">
                    </div>
                    <!-- ---------- Messages categories ---------- -->
                    <div class="category">
                        <h6 class="active"><a href="messagerie.html">Friends</a></h6>
                        <h6>Groups</h6>
                        <h6 class="message-requests"><a href="adminMessagerie.html">IFRI (2)</a></h6> 
                    </div>
                    <!-- ---------- Message ---------- -->
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-2.jpg") }}">
                        </div>
                        <div class="message-body">
                            <h5>Thomas Martin</h5>
                            <p class="text-muted">Just woke up</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-3.jpg") }}">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Anna Lopez</h5>
                            <p class="text-bold">3 news messages</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-4.jpg") }}">
                        </div>
                        <div class="message-body">
                            <h5>Kevin Dubois</h5>
                            <p class="text-muted">Are you Kamikaze</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-5.jpg") }}">
                        </div>
                        <div class="message-body">
                            <h5>Laura Nguyen</h5>
                            <p class="text-muted">It's raining</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-6.jpg") }}">
                        </div>
                        <div class="message-body">
                            <h5>Antoine Lefevre</h5>
                            <p class="text-muted">I'm joking</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="{{ asset("new/images/profile-7.jpg") }}">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Emma Garcia/h5>
                            <p class="text-bold">Happy Birthday</p>
                        </div>
                    </div>
                </div>
                <!-- ---------- END Message ---------- -->

                <!-- ---------- Friend Requests ---------- -->
                
            </div>
            <!-- ============= END main right =============== -->
        </div>
    </main>

    <!-- ======================= Theme ======================= -->
    <div class="customize-theme">
        <div class="card">
            <h2>Cutomize your view</h2>
            <p class="text-muted">Manage your font size; color and background</p>

            <!-- Font size -->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1 active"></span>
                        <span class="font-size-2"></span>
                        <span class="font-size-3"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!-- Primary color -->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                </div>
            </div>

            <!-- Background Color -->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Lights Out</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript links -->
    <script src="{{ asset("new/main.js") }}"></script>
    <script src="{{ asset("new/sidebar.js") }}"></script>
    <script src="{{ asset("new/messages.js") }}"></script>
</body>

</html>