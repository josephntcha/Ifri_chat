<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}" type="image/x-icon">
    <title>IFRI-Chat</title>
    <!-- style css link -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css") }}">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{asset("assets/fontawesom/css/all.min.css") }}">
    <!-- Bootstrap link -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> -->
</head>
<body>
    
<!-- header section start -->
    <header>
        <div class="header-container">
            {{-- style=" position: fixed;top: 0; width: 100%;z-index: 1000;" --}}
            <div class="header-wrapper">
                <div class="logoBox">
                    <img src="{{ asset("assets/images/facebook-logo.png") }}" alt="logo">
                </div>
                <div class="searchBox">
                    <input type="search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="iconBox1">
                    <a href="/index"><i class="fa-solid fa-house"></i></a>
                    <!-- <i class="fa-solid fa-house"></i> -->
                    <a href="{{ route('users') }}"><i class="fa-solid fa-user-group"></i></a>
                    <a href="#"><i class="fa-solid fa-briefcase"></i></a>
                    <!-- <i class="fa-solid fa-video"></i>
                    <i class="fa-solid fa-gamepad"></i> -->
                    <a href="/message_to_ifri">
                        <span>Write to IFRI</span>
                    </a>
                </div>
                <div class="iconBox2">
                    <!-- <i class="fa-solid fa-circle-plus"></i> -->
                    <a href="/chat">
                        <i class="fa-brands fa-facebook-messenger"></i>
                    </a>
                   
                   
                    <i class="fa-solid fa-bell"></i>
                    <label><img src="{{ asset("assets/images/user.jpg") }}" alt="user"></label>
                    <!-- <i class="fa-solid fa-caret-down"></i> -->
                </div>
            </div>
        </div>
    </header>


<!-- header section end -->

<!-- home section start -->

<div class="home">
    <div class="container">
        <div class="home-weapper">

            <!-- home left start here -->
            <div class="home-left">

                <div class="profile">
                    <img src="{{ asset("assets/images/user.jpg") }}" alt="user">
                    <h3>Zahidul hossain</h3>
                </div>
               
                <div class="pages">
                    <h4 class="mini-headign">Pages</h4>
                    <a href="/message_to_ifri">
                    <label>
                            <img src="{{asset ("assets/images/messenger.png") }}" alt="messenger">
                            <span>Write to IFRI</span>
                    </label>
                </a>
                   
                    <a href="{{ route('message_for_me',Auth::user()->id) }}">
                        <label>
                            <img src="{{ asset("assets/images/instagram.png") }}" alt="instagram">
                            <span>MessageIFRI</span>
                        </label>
                    </a>
                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

                <div class="group">
                    <h4 class="mini-headign">Group</h4>
                    <label>
                        <img src="{{ asset("assets/images/gg.png") }}" alt="group01">
                        <span>Graphic design</span>
                    </label>
                    
                    <label>
                        <img src="{{ asset("assets/images/gg2.png") }}" alt="group02">
                        <span>website design</span>
                    </label>

                    <label>
                        <img src="{{ asset("assets/images/gg3.png") }}" alt="group03">
                        <span>ZED.zahidul</span>
                    </label>

                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

                <div class="games">
                    <h4 class="mini-headign">Games</h4>
                    <label>
                        <img src="{{ asset("assets/images/game.png") }}" alt="game01">
                        <span>Facebook games</span>
                    </label>
                    <label>
                        <img src="{{ asset("assets/images/game2.png") }}" alt="game02">
                        <span>Free Play Games</span>
                    </label>
                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

                <div class="explore">
                    <h4 class="mini-headign">Explore</h4>
                   
                    <a href="#"><i class="fa-solid fa-user-group"></i> Group</a>
                    <a href="#"><i class="fa-solid fa-star"></i></i> Favorites</a>
                    <a href="#"><i class="fa-solid fa-bookmark"></i></i> Saves</a>
                    <a href="#"><i class="fa-solid fa-clock"></i> Events</a>
                    <a href="#"><i class="fa-solid fa-flag"></i> Pages</a>

                    <div><label class="darkTheme"> <span></span></label> Apply Dark Theme</div>

                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>
                
            </div>
            <div class="home-center">

                <div class="home-center-wrapper">


                    <div class="createPost">

                        <!-- <h3 class="mini-headign">Create Post</h3> -->
                        <div class="post-text">
                            <img src="{{ asset("assets/images/user.jpg") }}" alt="user">
                            <input type="text-area" placeholder="What's on your mind, zahidul">
                        </div>

                        <div class="post-icon">
                            <a href="#" style="background: #ffebed;">
                            <i style="background: #ff4154;" class="fa-solid fa-camera"></i>
                            Gallery</a>

                            <a href="#" style="background: #ccdcff;">
                            <i style="background: #0053ff;" class="fa-solid fa-video"></i>
                            Video</a>

                            <a href="#" style="background: #d7ffef;">
                            <i style="background: #00d181;" class="fa-solid fa-location-dot"></i>
                            Location</a>

                            <!-- <a href="#" style="background: #cff3ff;">
                                <i style="background: #04c3ff;" class="fa-solid fa-gift"></i>Gift
                            </a> -->
                            
                            <a href="#" style="background: #fff4d1;">
                            <i style="background: #ffca28;" class="fa-solid fa-face-grin-beam"></i>
                            Feeling / Acrivity</a>

                        </div>

                    </div>

                   
                    <div class="fb-post1">
                        <div class="fb-post1-container">
                            <div class="fb-post1-header">
                                <ul>
                                    <li class="active">popular</li>
                                    <li>recent</li>
                                    <li>most view</li>
                                </ul>
                            </div>
                            <div class="fb-p1-main">
                                <div class="post-title">
                                    <img src="{{ asset("assets/images/user2.jpg") }}" alt="user picture">
                                    <ul>
                                        <li><h3>Arham Kabir <span> . 2 hours ago</span></h3></li>
                                        <li><span>02 march at 12:55 PM</span></li>
                                    </ul>
                                    <p>Hello Everyone Thanks for Watching Please SUBSCRIBE My Channel - Like Comments and Share
                                        <a href="https://www.youtube.com/channel/UCHhGX-DD7A8jq7J_NPGN6gA">https://www.youtube.com/channel/UCHhGX-DD7A8jq7J_NPGN6gA</a>
                                    </p>
                                </div>

                                <div class="post-images">
                                    <div class="post-images1">
                                        <img src="{{ asset("assets/images/pp.jpg") }}" alt="post images 01">
                                        <img src="{{ asset("assets/images/pp2.jpg") }}" alt="post images 02">
                                        <img src="{{ asset("assets/images/pp3.jpg") }}" alt="post images 03">
                                    </div>
                                    <div class="post-images2">
                                        <img src="{{ asset("assets/images/pp4.jpg") }}" alt="post images 04">
                                    </div>
                                </div>

                                <div class="like-comment">
                                    <ul>
                                        <li>
                                            <img src="{{ asset("assets/images/love.png") }}" alt="love">
                                            <img src="{{ asset("assets/images/like.png") }}" alt="like">
                                            <span>22k like</span>
                                        </li>
                                        <li><i class="fa-regular fa-comment-dots"></i> <span>555 comments</span></li>
                                        <li><i class="fa-solid fa-share-from-square"></i> <span>254 share</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
                <!-- home center wrapper end -->

            </div> 
            <!-- home center end -->

            <!-- home right start here -->
            <div class="home-right">
                <div class="home-right-wrapper">

                    <div class="event-friend">
                        <div class="event">
                            <h3 class="heading">Upcoming Events <span>see all</span></h3>
                            <img src="{{ asset("assets/images/eve.jpg") }}" alt="event-img">
                            <div class="event-date">
                                <h3>21 <b>july</b></h3>
                                <h4>United state of America <span>New York City</span></h4>
                            </div>
                            <button><i class="fa-regular fa-star"></i> interested</button>
                        </div>

                        <hr>
                    
                        <div class="friend">
                            <h3 class="heading">Friend Requests <span>see all</span></h3>
                            <ul>
                                <li><img src="{{ asset("assets/images/user4.jpg") }}" alt="user"></li>
                                <li>
                                    <b>armanul islam</b>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <button>confirm</button><button class="friend-remove">remove</button>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="create-page">
                        <ul>
                            <li>
                                <i class="fa-solid fa-circle-plus"></i>
                                <h4>Create Page & Groups</h4>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </li>
                            <li>
                                <img src="images/group.jpg" alt="groups">
                            </li>
                            <li>
                                <b>simple group or page name <span>200k Members</span></b>
                                <button>Join Group</button>
                            </li>
                        </ul>
                    </div>

                    <div class="messenger">
                        <div class="messenger-search">
                            <i class="fa-solid fa-user-group"></i>
                            <h4>Messenger</h4>
                            <input type="search" placeholder="Search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <ul>
                            <li>
                                <img src="images/us2.png" alt="user">
                                <b>Zunayed Hossain <span>Online</span></b>
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </li>

                            <li>
                                <img src="images/us3.png" alt="user">
                                <b>Armanul Islam <span>Offline</span></b>
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </li>

                            <li>
                                <img src="images/us4.png" alt="user">
                                <b>Mohammad Amir <span>Online</span></b>
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </li>
                        </ul>
                    </div>

                </div><!-- home right wrapper end -->
            </div><!-- home right end -->

        </div>
    </div>
</div>

<!-- home section end -->

<!-- Script -->
<script>
    var darkButton = document.querySelector(".darkTheme");

    darkButton.onclick = function(){
        darkButton.classList.toggle("button-Active");
        document.body.classList.toggle("dark-color")
    }

</script>

</body>
</html>