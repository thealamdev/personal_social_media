 
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
                    <a href="#" class="d-flex justify-content-center align-items-center"><i class="fa-brands fa-facebook-messenger"></i></a>
                    <a href="#" class="d-flex justify-content-center align-items-center"><i class="las la-bell"></i></a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    <img src="assets/images/profile.jpg" alt="profile" width="40px" height="40px" style="border-radius: 50%;">
                </div>
            </nav>
        </div>