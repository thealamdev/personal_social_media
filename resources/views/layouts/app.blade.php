<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="shadow px-3">
        <nav class="d-flex justify-content-between align-items-center py-2 bg-white">
            <div class="nav-left d-flex justify-content-between align-items-center">
                <div class="nav-logo">
                    <img src="assets/icons/fb.png" alt="" width="40px">
                </div>
                <div class="nav-search">
                    <i class="las la-search"></i>
                    <input type="text" placeholder="Search Facebook" class="input-nav-search">
                </div>
            </div>
            <div class="nav-center d-flex justify-content-between align-items-center">
                <a href="#" class="active"><i class="fa-solid fa-house activeIcon"></i></a>
                <a href="#"><i class="fa-solid fa-user-group"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="nav-right d-flex justify-content-between align-items-center">
                <a href="#" class="d-flex justify-content-center align-items-center"><i class="las la-bars"></i></a>
                <a href="#" class="d-flex justify-content-center align-items-center"><i
                        class="fa-brands fa-facebook-messenger"></i></a>
                <a href="#" class="d-flex justify-content-center align-items-center"><i class="las la-bell"></i></a>
                <img src="assets/images/profile.jpg" alt="profile" width="40px" height="40px"
                    style="border-radius: 50%;">
            </div>
        </nav>
    </div>

    <main class="d-flex justify-content-between">
        <div class="left-sidebar">
            <div class="services">
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/images/profile.jpg" alt="" width="35" height="35" style="border-radius: 50%;">
                    <p class="ps-2 fw-bold fs-6">Shah Alam</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/friends.png" alt="" width="35" height="35">
                    <p class="ps-2 fw-bold fs-6">Friends</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/memories.png" alt="" width="35" height="35">
                    <p class="ps-2 fw-bold fs-6">Memories</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/save.png" alt="" width="35" height="35"">
                    <p class=" ps-2 fw-bold fs-6">Save</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/groups.png" alt="" width="35" height="35">
                    <p class="ps-2 fw-bold fs-6">Groups</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/videos.png" alt="" width="35" height="35">
                    <p class="ps-2 fw-bold fs-6">Videos</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/events.png" alt="" width="35" height="35">
                    <p class="ps-2 fw-bold fs-6">Groups</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/feeds.png" alt="" width="35" height="35">
                    <p class="ps-2 fw-bold fs-6">Feed</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/market.png" alt="" width="35" height="35">
                    <p class="ps-2 fw-bold fs-6">Market Place</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/messenger.png" alt="" width="35" height="35">
                    <p class="ps-2 fw-bold fs-6">Messenger</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/icons/facebook-page.png" alt="" width="35" height="35">
                    <p class="ps-2 fw-bold fs-6">Pages</p>
                </a>
            </div>
            <hr style="border-color: #b9b7b7;">
            <div class="shortcuts pb-5">
                <header class="d-flex justify-content-between p-2">
                    <p class=" fw-bold fs-6">Your Shortcuts</p>
                    <a href="#">Edit</a>
                </header>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/images/shortcuts/short-1.jpg" alt="" width="35" height="35"
                        style="border:1px solid #9e9e9e;border-radius: 10%;">
                    <p class="ps-2 fw-bold fs-6">City University Programming Club(CUPC)</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/images/shortcuts/short-2.jpg" alt="" width="35" height="35"
                        style="border:1px solid #9e9e9e;border-radius: 10%;">
                    <p class="ps-2 fw-bold fs-6">Laravel Experts Bangladesh</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/images/shortcuts/short-3.jpg" alt="" width="35" height="35"
                        style="border:1px solid #9e9e9e;border-radius: 10%;">
                    <p class="ps-2 fw-bold fs-6">চাকরি প্রার্থী-Job Candidates</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/images/shortcuts/short-4.jpg" alt="" width="35" height="35"
                        style="border:1px solid #9e9e9e;border-radius: 10%;">
                    <p class="ps-2 fw-bold fs-6">City University Family</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/images/shortcuts/short-5.png" alt="" width="35" height="35"
                        style="border:1px solid #9e9e9e;border-radius: 10%;">
                    <p class="ps-2 fw-bold fs-6">Laravel Bangladesh Community</p>
                </a>
                <a class="left-item d-flex align-items-center p-2 text-dark">
                    <img src="assets/images/shortcuts/short-5.png" alt="" width="35" height="35"
                        style="border:1px solid #9e9e9e;border-radius: 10%;">
                    <p class="ps-2 fw-bold fs-6">Laravel Bangladesh Community</p>
                </a>
            </div>
        </div>

        <div class="main-content">
            <div class="post-upload shadow-sm">
                <div class="d-flex align-items-center p-2 text-dark">
                    <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                    <input type="text" placeholder="What's on your mind, Shah?" class="post-form">
                </div>
                <hr style="border-color: #b9b7b7;">
                <div class="upload-items d-flex justify-content-between p-2">
                    <button class="upload-button">
                        <img src="assets/icons/live.png" alt="" class="pe-2" width="30px">
                        <p>Live Video</p>
                    </button>
                    <button class="upload-button">
                        <img src="assets/icons/gallery.png" alt="" class="pe-2" width="30px">
                        <p> Photo/Video</p>
                    </button>
                    <button class="upload-button">
                        <img src="assets/icons/feeling.png" alt="" class="pe-2" width="30px">
                        <p> Feelings/activity</p>
                    </button>
                </div>
            </div>

            <!-- Post View Part Start -->
            <div class="post-view-wrapper p-2">
                <div class="post-view-item">
                    <div class="post-header d-flex justify-content-between align-items-center">
                        <div class="post-owner d-flex align-items-center">
                            <img src="assets/images/profile.jpg" alt="" width="40" height="40"
                                style="border-radius: 50%;">
                            <div class="owner-time">
                                <p class="ps-2 fw-bold fs-6">Md. Shah Alam</p>
                                <p class="ps-2" style="font-size: 14px;">9m ago</p>
                            </div>
                        </div>

                        <div class="post-action">
                            <a href="#" style="color: gray; font-size: 20px;"><i class="fa-solid fa-ellipsis"></i></a>
                            <a href="#" class="ps-2" style="color: gray; font-size: 20px;"><i
                                    class="fa-solid fa-xmark"></i></a>
                        </div>
                    </div>

                    <!-- post body start  -->
                    <div class="post-body mt-4">
                        <div class="post-text">
                            <p>
                                রাজধানীর শাহবাগ মোড়ে পুলিশের ব্যারিকেড ভেঙে দিয়েছেন কোটাবিরোধী শিক্ষার্থীরা। বৃহস্পতিবার
                                (১১ জুলাই) বিকেল ৫টার দিকে ব্যারিকডে ভেঙে কারওয়ানবাজারমুখী হতে থাকেন আন্দোলনকারীরা
                                বিস্তারিত : https://www.somoynews.tv/news/2024-07-11/7GX8MEGN
                                কোটাবিরোধী আন্দোলনের সব খবর সবার আগে জানতে ক্লিক করুন:
                                https://www.somoynews.tv/news/2024-07-11/2vVS1TNE
                                #Antiquotamovement #somoytv
                            </p>
                        </div>
                        <div class="post-image mt-2">
                            <img src="assets/images/posts/post-1.jpg" alt="" class="w-100">
                        </div>
                        <hr style="border: #b9b7b7;">
                    </div>
                    <!-- post body end  -->

                </div>
            </div>
            <!-- Post View Part End -->

            <!-- 2nd Post Start -->
            <div class="post-view-wrapper p-2">
                <div class="post-view-item">
                    <div class="post-header d-flex justify-content-between align-items-center">
                        <div class="post-owner d-flex align-items-center">
                            <img src="assets/images/profile.jpg" alt="" width="40" height="40"
                                style="border-radius: 50%;">
                            <div class="owner-time">
                                <p class="ps-2 fw-bold fs-6">Md. Shah Alam</p>
                                <p class="ps-2" style="font-size: 14px;">9m ago</p>
                            </div>
                        </div>

                        <div class="post-action">
                            <a href="#" style="color: gray; font-size: 20px;"><i class="fa-solid fa-ellipsis"></i></a>
                            <a href="#" class="ps-2" style="color: gray; font-size: 20px;"><i
                                    class="fa-solid fa-xmark"></i></a>
                        </div>
                    </div>

                    <!-- post body start  -->
                    <div class="post-body mt-4">
                        <div class="post-text">
                            <p>
                                AI With Me😎
                                ভালোলাগছে 😊
                                AI আমার মনের কথাগুলা বোঝে 😒
                            </p>
                        </div>
                        <div class="post-image mt-2">
                            <img src="assets/images/posts/post-2.jpg" alt="" class="w-100">
                        </div>
                        <hr style="border: #b9b7b7;">
                    </div>
                    <!-- post body end  -->

                </div>
            </div>
            <!-- 2nd Post End -->
        </div>

        <div class="right-content">
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
            <div class="left-item d-flex align-items-center mb-3">
                <img src="assets/images/profile.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
                <p class="ps-4">Md. Shah Alam</p>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>