<footer>
    <div class="footer">
       <div class="container">
          <div class="row">
             <div class=" col-md-4">
                <h3>Contact US</h3>
                <ul class="conta">
                   <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                   <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                   <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                </ul>
             </div>
             <div class="col-md-4">
                <h3>Menu Link</h3>
                <ul class="link_menu">
                   <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                   <li class="{{ Request::is('hotels') ? 'active' : '' }}"><a href="{{ url('/hotels') }}"> Hotels</a></li>
                   @auth
                   <li><a href="room.html">Recommendation</a></li>
                   @endauth
                </ul>
             </div>
             <div class="col-md-4">
                <h3>News letter</h3>
                <form class="bottom_form">
                   <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                   <button class="sub_btn">subscribe</button>
                </form>
                <ul class="social_icon">
                   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
       <div class="copyright">
          <div class="container">
             <div class="row">
                <div class="col-md-10 offset-md-1">
                   
                   <p>
                   © 2024 All Rights Reserved. Design by <a href="https://html.design/"> Thein Thein Soe</a>
                   
                   {{-- Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a> --}}
                   </p>

                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <!-- end footer -->
 <!-- Javascript files-->
 <script src="{{ asset('user/js/jquery.min.js') }}"></script>
 <script src="{{ asset('user/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('user/js/jquery-3.0.0.min.js') }}"></script>
 <!-- sidebar -->
 <script src="{{ asset('user/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
 <script src="{{ asset('user/js/custom.js') }}"></script>

