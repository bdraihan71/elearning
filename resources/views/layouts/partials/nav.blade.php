 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-tomato">
        <div class="container">
            <a href="#" class="navbar-brand">Raihan</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mainnav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainnav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item active">
                        <!-- <a href="#" class="nav-link">Faq</a> -->
                        <a class="nav-link" href="{{ route('logout') }}">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End   -->