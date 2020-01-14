<!DOCTYPE html>
<html lang="en">

<head>
  <title>ST.CHARLES MUTEGO EDUCATIONAL CENTRE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="py-2 bg-secondary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <span style="color:#FFFFFF"><em>Motto: Lorem ipsum says it should be here.</em></span>
          </div>
          <div class="col-lg-3 text-right">
          <a href="{{url('/login')}}" class="small mr-3 btn-sm btn-warning"><span class="icon-unlock-alt"></span> Log In</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
          <a href="{{url('/')}}" class="d-block">
                  <p class="mb-4"><img width="160em" height="80em" src="{{asset('images/logo.jpeg')}}" 
                    alt="Image" class="img-thumbnail"></p>
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                <a href="{{url('/')}}" class="nav-link text-left">Home</a>
                </li>
                <li class="has-children">
                  <a href="{{url('/#')}}" class="nav-link text-left">About Us</a>
                  <ul class="dropdown">
                    <li><a href="{{url('/profile')}}">Our Profile</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="{{url('/#')}}" class="nav-link text-left">Our Institutions</a>
                  <ul class="dropdown">
                    <li><a href="{{url('/primary')}}">Primary Mixed School-Kiserian</a></li>
                    <li><a href="{{url('/secondary')}}">Secondary Girls' School-Mombasa</a></li>
                    <li><a href="{{url('/boys')}}">Boys School-Nairobi</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="{{url('/#')}}" class="nav-link text-left">Admission</a>
                  <ul class="dropdown">
                    <li><a href="{{url('/admission')}}">Entry Requirements & Procedures</a></li>
                    <li><a href="{{url('/fee_structure')}}">Fee Payment</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="{{url('/#')}}" class="nav-link text-left">Events</a>
                  <ul class="dropdown">
                    <li><a href="{{url('/school_gallery')}}">Photo Gallery</a></li>
                  </ul>
                </li>
                <li>
                    <a href="{{url('/contact')}}" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="wrap">
              <a href="{{url('/#')}}"><span class="icon-facebook" style="color: #D2691E"></span></a>
              <a href="{{url('/#')}}"><span class="icon-twitter" style="color: #D2691E"></span></a>
              <a href="{{url('/#')}}"><span class="icon-instagram" style="color: #D2691E"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu "></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

    
    @yield('body') 


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
          <p class="mb-4"><img width="150em" height="150em" src="{{asset('images/logo.jpeg')}}" alt="Image" class="img-thumbnail"></p> 
            
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Schools</span></h3>
            <ul class="list-unstyled">
                <li><a href="{{url('/primary')}}"><span style="color:#D2691E">Primary Mixed</span></a></li>
                <li><a href="{{url('/secondary')}}"><span style="color:#D2691E">Secondary Girls</span></a></li>
                <li><a href="{{url('/boys')}}"><span style="color:#D2691E">Secondary Boys</span></a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Facilities</span></h3>
              <ul class="list-unstyled">
                <li><a href="{{url('/')}}"><span style="color:#D2691E">Free Transport</span></a></li>
                <li><a href="{{url('/')}}"><span style="color:#D2691E">Subsidized Fee</span></a></li>
                <li><a href="{{url('/')}}"><span style="color:#D2691E">Modern Campus</span></a></li>
              <li><a href="{{url('/contact')}}"><span style="color:#D2691E">Our Location</span></a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact Adress</span></h3>
              <ul class="list-unstyled" style="color: #D2691E">
                St.Charles Mutego Educational Centre,<br>
                P.O BOX 34161-00100,<br>
                Nairobi-Kenya.
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
              <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>| 
                <a href="{{url('http://johnvique.info')}}">
                <span style="color:#D2691E">St. Charles Mutego Educational Center</span></a> | All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>