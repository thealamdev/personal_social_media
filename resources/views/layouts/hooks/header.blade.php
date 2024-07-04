<!-- header section start -->
<section id="header">
    <div class="container">
        <div class="header_main">
            <div class="header_left">
                <div class="header_logo">
                    <h2>Facebook</h2>
                </div>

                <div class="header_icon">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>

            <div class="header_right">
                <div class="search_bar">
                    <input type="text" placeholder="search">
                </div>
                <div class="profile_pic">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- header section end -->
