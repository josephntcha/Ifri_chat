<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/" type="image/x-icon">
    <title>AluminiNet</title>
    <!-- Links -->
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
                <label class="btn btn-primary" for="Create-post">Create</label>
                <div class="profile-picture">
                    <img src="{{ asset("new/images/profile-1.jpg") }}" alt="User Profile">
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN -->
    <main>
        <div class="container">
            <!-- ============= main left =============== -->
            <div class="left">
                <a class="profile">
                    <div class="profile-picture">
                        <img src="{{ asset("new/images/profile-1.jpg") }}" alt>
                    </div>
                    <div class="handle">
                        <h4>Diana Ipsum</h4>
                        <p class="text-muted">
                            Lorem Ipsum
                        </p>
                    </div>
                </a>
                <!-- ------------- Sidebar ------------ -->
                <div class="sidebar">
                    <a href="/index" class="menu-item active">
                        <span><i class="fas fa-house"></i></span>
                        <h3>Home</h3>
                    </a>
                    <a href="/users" class="menu-item active">
                        <span><i class="fas fa-user-friends"></i></span>
                        <h3>Friends</h3>
                    </a>
                    <a href="{{ route('message_for_me',Auth::user()->id) }}" class="menu-item active">
                        {{-- <span><i class="fas fa-users"></i></span> --}}
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
                    <a  class="menu-item active">
                        <span><i class="fas fa-gear"></i></span> 
                        <h3>Setting</h3>
                    </a>
                </div>
                <!-- ------------- END Sidebar ------------ -->
            </div>
            <!-- ============= END main left =============== -->

            <!-- ============= main middle =============== -->
            <div class="middle">
                <!-- ------------- Stories ------------ -->
                <!-- <div class="stories">
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-7.jpg">
                        </div>
                        <p class="name">Your Story</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-8.jpg">
                        </div>
                        <p class="name">Steph James</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-9.jpg">
                        </div>
                        <p class="name">Lova Chimaine</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-10.jpg">
                        </div>
                        <p class="name">Roberto deGuelliro</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-11.jpg">
                        </div>
                        <p class="name">Cheese Akpan</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-12.jpg">
                        </div>
                        <p class="name">BrotherHood Guy</p>
                    </div>
                </div> -->
                <!-- ------------- END Stories ------------ -->

                <!-- ------------- Create Post ------------ -->
                <form class="create-post">
                    <div class="profile-picture">
                        <img src="{{ asset("new/images/profile-1.jpg") }}">
                    </div>
                    <input type="text" placeholder="What's of news ?" id="create-post">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>
                <!-- ------------- END Create Post ------------ -->

                <!-- ------------- Feeds ------------ -->
                <div class="feeds">
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/profile-13.jpg") }}">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 minutes ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="{{ asset("new/images/feed-1.jpg") }}">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-nodes"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="{{ asset("new/images/profile-11.jpg") }}"></span>
                            <span><img src="{{ asset("new/images/profile-14.jpg") }}"></span>
                            <span><img src="{{ asset("new/images/profile-5.jpg") }}"></span>
                            <p>Liked by <b>Ernest Rebecca</b> and <b>342 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b> Lorem ipsum dorto color irema. <span class="H-tag">#lifestyle</span></p>
                        </div>
                        <div class="coments text-muted">View all 135 comments</div>
                    </div>
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/profile-14.jpg") }}">
                                </div>
                                <div class="ingo">
                                    <h3>Loria Grandfell</h3>
                                    <small>KYOTO, 15 minutes ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="{{ asset("new/images/feed-2.jpg") }}">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-nodes"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="{{ asset("new/images/profile-1.jpg") }}"></span>
                            <span><img src="{{ asset("new/images/profile-4.jpg") }}"></span>
                            <span><img src="{{ asset("new/images/profile-5.jpg") }}"></span>
                            <p>Liked by <b>Ernest Rebecca</b> and <b>342 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b> Lorem ipsum dorto color irema. <span class="H-tag">#lifestyle</span></p>
                        </div>
                        <div class="coments text-muted">View all 135 comments</div>
                    </div>
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/profile-15.jpg") }}">
                                </div>
                                <div class="ingo">
                                    <h3>Lorem Daki</h3>
                                    <small>URBAIN, 15 minutes ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="{{ asset("new/images/feed-3.jpg") }}">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-nodes"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="{{ asset("new/images/profile-13.jpg") }}"></span>
                            <span><img src="{{ asset("new/images/profile-4.jpg") }}"></span>
                            <span><img src="{{ asset("new/images/profile-7.jpg") }}"></span>
                            <p>Liked by <b>Ernest Rebecca</b> and <b>342 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b> Lorem ipsum dorto color irema. <span class="H-tag">#lifestyle</span></p>
                        </div>
                        <div class="coments text-muted">View all 135 comments</div>
                    </div>
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="{{ asset("new/images/profile-16.jpg") }}">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 minutes ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="images/feed-4.jpg">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-nodes"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-19.jpg"></span>
                            <span><img src="images/profile-14.jpg"></span>
                            <span><img src="images/profile-15.jpg"></span>
                            <p>Liked by <b>Ernest Rebecca</b> and <b>342 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b> Lorem ipsum dorto color irema. <span class="H-tag">#lifestyle</span></p>
                        </div>
                        <div class="coments text-muted">View all 135 comments</div>
                    </div>
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-17.jpg">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 minutes ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="images/feed-5.jpg">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-nodes"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-11.jpg"></span>
                            <span><img src="images/profile-14.jpg"></span>
                            <span><img src="images/profile-5.jpg"></span>
                            <p>Liked by <b>Ernest Rebecca</b> and <b>342 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b> Lorem ipsum dorto color irema. <span class="H-tag">#lifestyle</span></p>
                        </div>
                        <div class="coments text-muted">View all 135 comments</div>
                    </div>
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-18.jpg">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 minutes ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="images/feed-6.jpg">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-nodes"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-11.jpg"></span>
                            <span><img src="images/profile-14.jpg"></span>
                            <span><img src="images/profile-5.jpg"></span>
                            <p>Liked by <b>Ernest Rebecca</b> and <b>342 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b> Lorem ipsum dorto color irema. <span class="H-tag">#lifestyle</span></p>
                        </div>
                        <div class="coments text-muted">View all 135 comments</div>
                    </div>
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-19.jpg">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 minutes ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="images/feed-7.jpg">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-nodes"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-11.jpg"></span>
                            <span><img src="images/profile-14.jpg"></span>
                            <span><img src="images/profile-5.jpg"></span>
                            <p>Liked by <b>Ernest Rebecca</b> and <b>342 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b> Lorem ipsum dorto color irema. <span class="H-tag">#lifestyle</span></p>
                        </div>
                        <div class="coments text-muted">View all 135 comments</div>
                    </div>
                </div>
                <!-- ------------- END Feeds ------------ -->
            </div>
            <!-- ============= END main middle =============== -->

            <!-- ============= main right =============== -->
            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4><i class="fas fa-file-pen"></i>
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
                            <div class="active"></div>
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
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Roberta Dinero</h5>
                            <p class="text-bold">Happy Birthday</p>
                        </div>
                    </div>
                </div>
                <!-- ---------- END Message ---------- -->

                <!-- ---------- Friend Requests ---------- -->
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="images/profile-8.jpg">
                            </div>
                            <div>
                                <h5>Santiago Vares</h5>
                                <p class="text-muted">8 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="images/profile-9.jpg">
                            </div>
                            <div>
                                <h5>Hadna Bella</h5>
                                <p class="text-muted">10 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="images/profile-10.jpg">
                            </div>
                            <div>
                                <h5>Mariano Durant</h5>
                                <p class="text-muted">28 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="images/profile-11.jpg">
                            </div>
                            <div>
                                <h5>Gonzallo Valez</h5>
                                <p class="text-muted">250 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>
                </div>
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

</html>