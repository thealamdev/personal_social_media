<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- custom css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    @auth
        @include('layouts.hooks.header')

        <!-- project body section start -->
        <section id="project_body">
            <div class="project_body_main">
                <div class="row px-5">
                    <!-- body left -->
                    <div class="col-lg-3 w-100">
                        <div class="body_left">
                            <div class="left_item">
                                <ul>
                                    <li>
                                        <a href="#">latest News</a>
                                    </li>

                                    <li>
                                        <a href="#">Friends</a>
                                    </li>

                                    <li>
                                        <a href="#">Grouup</a>
                                    </li>

                                    <li>
                                        <a href="#">Marketplace</a>
                                    </li>

                                    <li>
                                        <a href="#">Watch</a>
                                    </li>

                                    <div class="see_more">
                                        <p><a href="#">See More</a></p>
                                    </div>

                                    <div class="under_line mt-4">

                                    </div>

                                </ul>

                                <div class="shortcuts">
                                    <h3>Your Shortcuts</h3>
                                    <!-- 1st shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Web Developers</p>
                                        </div>
                                    </div>
                                    <!-- 2nd shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/post-1.jpg') }}" alt="post-1">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Web Design course</p>
                                        </div>
                                    </div>
                                    <!-- 3rd shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/post-2.jpg') }}" alt="post-2">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Full Stack Development</p>
                                        </div>
                                    </div>
                                    <!-- 4th shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/post-1.jpg') }}" alt="post-1">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Website Experts</p>
                                        </div>
                                    </div>

                                    <!-- extra -->
                                    <!-- 1st shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Web Developers</p>
                                        </div>
                                    </div>
                                    <!-- 2nd shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/post-1.jpg') }}" alt="post-1">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Web Design course</p>
                                        </div>
                                    </div>
                                    <!-- 3rd shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/post-2.jpg') }}" alt="post-2">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Full Stack Development</p>
                                        </div>
                                    </div>
                                    <!-- 4th shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/post-1.jpg') }}" alt="post-1">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Website Experts</p>
                                        </div>
                                    </div>
                                    <!-- 1st shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Web Developers</p>
                                        </div>
                                    </div>
                                    <!-- 2nd shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/post-1.jpg') }}" alt="post-1">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Web Design course</p>
                                        </div>
                                    </div>
                                    <!-- 3rd shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/post-2.jpg') }}" alt="post-2">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Full Stack Development</p>
                                        </div>
                                    </div>
                                    <!-- 4th shortcut -->
                                    <div class="shortcut_item">
                                        <div class="shortcut_img">
                                            <img src="{{ asset('assets/images/post-1.jpg') }}" alt="post-1">
                                        </div>

                                        <div class="shortcut_text">
                                            <p>Website Experts</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- body middle -->
                    <div class="col-lg-6 pl-0 pr-0">
                        <!-- my day section start -->
                        <div class="my_day_main">
                            <!-- create myday -->
                            <div class="create_story">
                                <div class="story_img">
                                    <img src="images/g-3.jpg" alt="g-3">
                                    <div class="story_overlay">
                                        <div class="overlay_text">
                                            <div class="plus_icon">
                                                <h1>+</h1>
                                            </div>

                                            <div class="overlay_content">
                                                <p>Fast Story</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- story 1 -->

                            <div class="create_story">
                                <div class="story_img">
                                    <img src="images/g-3.jpg" alt="g-3">
                                    <div class="story_overlay">
                                        <div class="overlay_text">
                                            <div class="story_profile">
                                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                            </div>
                                        </div>

                                        <div class="story_profile_name">
                                            <p>Md.Shah</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2nd story -->

                            <div class="create_story">
                                <div class="story_img">
                                    <img src="images/g-4.jpg" alt="g-3">
                                    <div class="story_overlay">
                                        <div class="overlay_text">
                                            <div class="story_profile">
                                                <img src="images/g-3.jpg" alt="logo">
                                            </div>

                                        </div>

                                        <div class="story_profile_name">
                                            <p>Md.Mehedi Hassan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3rd story -->
                            <div class="create_story">
                                <div class="story_img">
                                    <img src="images/g-5.jpg" alt="g-3">
                                    <div class="story_overlay">
                                        <div class="overlay_text">
                                            <div class="story_profile">
                                                <img src="images/g-4.jpg" alt="logo">
                                            </div>
                                        </div>

                                        <div class="story_profile_name">
                                            <p>Md.Sajjat Hossain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 4th sotry -->
                        <!-- <div class="create_story">
                                                                                    <div class="story_img">
                                                                                        <img src="images/g-3.jpg" alt="g-3">
                                                                                        <div class="story_overlay">
                                                                                             <div class="overlay_text">
                                                                                                <div class="story_profile">
                                                                                                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                                                                                </div>
                                                                                                
                                                                                                 <div class="story_profile_name">
                                                                                                    <p>Md.Shah Alam</p>
                                                                                                 </div>
                                                                                             </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> -->
                        <!-- end of story -->



                        <!-- my day section end -->
                        <!-- post main start -->
                        {{ $slot }}





                        <!-- 1st post -->
                        <div class="middle_post_main">
                            <div class="post_img_main">
                                <div class="post_profile">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                </div>

                                <div class="post_name">
                                    <h3>Md. Shah Alam</h3>
                                    <p>12 july , 2022</p>
                                </div>
                            </div>

                            <div class="post_details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident ipsam sapiente
                                    aliquam minus. Animi incidunt possimus hic magnam voluptas dolores.</p>
                            </div>

                            <div class="post_img">
                                <img src="{{ asset('assets/images/post-1.jpg') }}" alt="post-1">
                            </div>
                        </div>

                        <!-- 2nd post  -->

                        <div class="middle_post_main">
                            <div class="post_img_main">
                                <div class="post_profile">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                </div>

                                <div class="post_name">
                                    <h3>Md. Shah Alam</h3>
                                    <p>12 july , 2022</p>
                                </div>
                            </div>

                            <div class="post_details">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus dolorem alias
                                    praesentium illo, vel molestias quas nisi provident ipsum animi, mollitia voluptate
                                    aliquid corrupti sequi labore.</p>
                            </div>

                            <div class="post_img">
                                <img src="{{ asset('assets/images/post-2.jpg') }}" alt="post-2">
                            </div>
                        </div>
                        <!-- 3rd post -->
                        <div class="middle_post_main">
                            <div class="post_img_main">
                                <div class="post_profile">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                </div>

                                <div class="post_name">
                                    <h3>Md. Sajjat</h3>
                                    <p>6 May , 2012</p>
                                </div>
                            </div>

                            <div class="post_details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laboriosam,
                                    numquam tempore doloribus non dolore quae quaerat voluptas minima iusto beatae animi
                                    voluptates. Molestiae, odio quisquam voluptatum aut nostrum aliquid nihil atque
                                    quasi. Id, voluptatum.</p>
                            </div>

                            <div class="post_img">
                                <img src="images/g-4.jpg" alt="g-4">
                            </div>
                        </div>
                        <!-- end of middle section -->
                    </div>
                    <!-- right body -->
                    <div class="col-lg-3 pr-0">
                        <div class="right_body">
                            <div class="right_item_main">
                                <div class="right_item_header">
                                    <h3>Events</h3>
                                    <a href="#">See All</a>
                                </div>
                                <!-- 1st sedule -->
                                <div class="right_sedule">
                                    <div class="sedule_date">
                                        <div class="date">
                                            <h3>15</h3>
                                        </div>
                                        <div class="week">
                                            <p>Week</p>
                                        </div>
                                    </div>

                                    <div class="sedule_details">
                                        <h3>Social Media</h3>
                                        <p>Panthopath/Dhaka</p>
                                        <a href="#">More info</a>
                                    </div>
                                </div>
                                <!-- 2nd sedule -->
                                <div class="right_sedule">
                                    <div class="sedule_date">
                                        <div class="date">
                                            <h3>22</h3>
                                        </div>
                                        <div class="week">
                                            <p>Week</p>
                                        </div>
                                    </div>

                                    <div class="sedule_details">
                                        <h3> Mobile Marketing</h3>
                                        <p>Agarganj/Dhaka</p>
                                        <a href="#">More info</a>
                                    </div>
                                </div>

                                <!-- Advertisement part -->

                                <div class="right_item_header mt-3">
                                    <h3>Advertisement</h3>
                                    <a href="#">Close</a>
                                </div>

                                <div class="advertisement_photo">
                                    <img src="images/g-3.jpg" alt="g-3" class="w-100">
                                </div>

                                <!-- conversation part -->
                                <div class="right_item_header mt-3">
                                    <h3>Conversation</h3>
                                    <a href="#">Close Chats</a>
                                </div>


                                <div class="conversation_main">
                                    <!-- 1st item -->
                                    <div class="conversation_item">
                                        <div class="con_img">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                        </div>
                                        <div class="con_name">
                                            <p> Md. Mehedi Hasan</p>
                                        </div>
                                    </div>

                                    <!-- 2nd item -->

                                    <div class="conversation_item">
                                        <div class="con_img">
                                            <img src="images/g-9.jpg" alt="logo">
                                        </div>
                                        <div class="con_name">
                                            <p> Md. Mehedi Hasan</p>
                                        </div>
                                    </div>

                                    <!-- 3rd item -->

                                    <div class="conversation_item">
                                        <div class="con_img">
                                            <img src="images/g-7.jpg" alt="g-7">
                                        </div>
                                        <div class="con_name">
                                            <p> Md. Mehedi Hasan</p>
                                        </div>
                                    </div>
                                    <!-- 4th item -->
                                    <div class="conversation_item">
                                        <div class="con_img">
                                            <img src="images/g-6.jpg" alt="g-6">
                                        </div>
                                        <div class="con_name">
                                            <p> Md. Mehedi Hasan</p>
                                        </div>
                                    </div>
                                    <!-- 5th item -->
                                    <div class="conversation_item">
                                        <div class="con_img">
                                            <img src="images/g-5.jpg" alt="g-5">
                                        </div>
                                        <div class="con_name">
                                            <p> Md. Mehedi Hasan</p>
                                        </div>
                                    </div>
                                    <!-- 6th item -->
                                    <div class="conversation_item">
                                        <div class="con_img">
                                            <img src="images/g-4.jpg" alt="g-4">
                                        </div>
                                        <div class="con_name">
                                            <p> Md. Mehedi Hasan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project body section end -->
    @endauth

    @guest
        @include('auth.login')
    @endguest
    <!-- bootstrap js link -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- custom js link -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
