 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-tomato">
     <div class="container">
         <a href="#" class="navbar-brand">Elearning</a>
         <button class="navbar-toggler" data-toggle="collapse" data-target="#mainnav">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="mainnav">
             <ul class="navbar-nav ml-auto">
                 @guest
                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
                 @if (Route::has('register'))
                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
                 @endif
                 @else
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
                     <a class="nav-link" href="{{ route('logout') }}">
                         Logout
                     </a>
                 </li>
                 @endguest
             </ul>
         </div>
     </div>
 </nav>
 <!-- Navbar End   -->