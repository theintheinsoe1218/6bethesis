<div class="header">
    <div class="container">
       <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
             <div class="full">
                <div class="center-desk">
                   <div class="logo">
                      <a href="{{ url('/') }}"><img src="{{ asset('user/images/logo.png') }}" alt="#" /></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
             <nav class="navigation navbar navbar-expand-md navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                   <ul class="navbar-nav mr-auto">
                     <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                     </li>
                     <li class="nav-item {{ Request::is('hotels') ? 'active' : '' }}">
                           <a class="nav-link" href="{{ url('/hotels') }}">Hotels</a>
                     </li>
                     @auth

                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('recommendations.index') }}">Recommendation</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('rate') }}">Rating</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a> <!-- Replace with actual profile route -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                     </li>
                     
                     @else
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                     </li>
                     @endauth
                     
                     {{-- <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li> --}}
                   </ul>
                </div>
             </nav>
          </div>
       </div>
    </div>
 </div>