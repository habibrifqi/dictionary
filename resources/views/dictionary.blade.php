<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Web Elements</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('images/fevicon.png" type="image/gif')}}" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <style>
      .a.form-control {
          height: 50px;
          border-radius: 100px;
          border: transparent;
          padding: 0px 20px;
          font-size: 18px;
          color: #343535;
          -webkit-appearance: none;
          background-image: url(../images/down-arrow.png);
          background-repeat: no-repeat;
          background-size: 15px;
          background-position: 96% center;
      }
      </style>
   </head>
   <!-- body -->
   <body>
      <!-- header section start -->
      <div class="header_section">
        <div class="header_main">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="dictionary.html" >dictionary</a>
                    <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">One</a>
                      <a class="dropdown-item" href="#">Two</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Three</a>
                    </div> -->
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Help</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">One</a>
                      <a class="dropdown-item" href="#">Two</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Three</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">One</a>
                      <a class="dropdown-item" href="#">Two</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Three</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <h4 class="login_text"><a href="login.html">Log In</a>|<a href="sigup.html">Sign Up</a></h4>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Listing</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <p class="call_text"><a href="#">Call:+01 9876543210</a></p>
                </form>
              </div>
            </nav>
          </div>
        </div>
      <!-- header section end -->
      </div>
      <!-- works section start -->
      <div class="work_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <form>
                <div class="form-group">
                  <input type="Search-word" class="form-control a" placeholder="Search-word" name="Search-word">
                </div>
              </form>
            </div>
            <div class="col-md-2">
              <div class="start_bt dic-page">
                <div class="Search_bt dic-page"><a class="a-dic-page" href="#">Search</a></div>
              </div>
            </div>
          </div>

          <div class="work_main">
            <h1 class="work_text"> <span style="color: #32caeb;">dictionary</span></h1>
            <div class="work_section2">
            <div class="row">
              <div class="col-sm-12">
                <div class="choose_main">
                  <div class="choose_left">
                    <h1 class="number_text"><a href="#">ARAH</a></h1>
                  </div>
                  <div class="choose_right">
                    <h1 class="choose_text">"Direction" <span style="color: #32caeb;"> .N</span></h1>
                    {{-- <h3 class="">Definisi</h3> --}}
                    <ul class="dictionari-ul">
                      {{-- <li>-<span style="color: #32caeb;"> Celui (ou celle) qui parle ou qui écrit, se référant à lui (ou elle) seul</span></li> --}}
                      <li> 1.example </li>
                      <div class="bungkus-p">
                        <p class="isi-dictionary">
                          dia berangkat ke arah masjid<span style="color: #32caeb;"></span>
                        </p>
                        <p class="isi-dictionary">
                          il part en direction de la mosquèe
                        </p>
                      </div>
                      {{-- <li>- <span style="color: #32caeb;">Première personne du singulier</span></li> --}}
                      <li> 2.example</li>
                      <div class="bungkus-p">
                        <p class="isi-dictionary">
                          dari semua arah<span style="color: #32caeb;"></span>
                        </p>
                        <p class="isi-dictionary">
                          de toutes parts
                        </p>
                      </div>
                    </ul>
                    <h1 class="choose_text">"Intention" <span style="color: #32caeb;"> .F</span></h1>
                    <ul class="dictionari-ul">
                      {{-- <li>-<span style="color: #32caeb;"> Celui (ou celle) qui parle ou qui écrit, se référant à lui (ou elle) seul</span></li> --}}
                      <li> 1.example </li>
                      <div class="bungkus-p">
                        <p class="isi-dictionary">
                          Ia bisa menerkah arah kemana percakapan itu<span style="color: #32caeb;"></span>
                        </p>
                        <p class="isi-dictionary">
                          il peut deviner vers ou va la conversation
                        </p>
                      </div>
                      {{-- <li>- <span style="color: #32caeb;">Première personne du singulier</span></li> --}}
                      <li> 2.example</li>
                      <div class="bungkus-p">
                        <p class="isi-dictionary">
                          dari semua arah<span style="color: #32caeb;"></span>
                        </p>
                        <p class="isi-dictionary">
                          de toutes parts
                        </p>
                      </div>
                    </ul>

                    <br>
                    <h1 class="choose_text"><span style="color: #32caeb;">BERARAH</span></h1>
                    <ul class="dictionari-ul">
                      {{-- <li>-<span style="color: #32caeb;"> Celui (ou celle) qui parle ou qui écrit, se référant à lui (ou elle) seul</span></li> --}}
                      <li> <h4>"avoir une direction"</h4> </li>
                      {{-- <li>- <span style="color: #32caeb;">Première personne du singulier</span></li> --}}
                      <li><h4> "avoir un but"</h4></li>
                      <div class="bungkus-p">
                        <p class="isi-dictionary">
                          jalanku tak berarah<span style="color: #32caeb;"></span>
                        </p>
                        <p class="isi-dictionary">
                          ma vie n'a pas de but
                        </p>
                      </div>
                    </ul>
                    <h1 class="choose_text"><span style="color: #32caeb;">MENGARAH</span></h1>
                    <ul class="dictionari-ul">
                      {{-- <li>-<span style="color: #32caeb;"> Celui (ou celle) qui parle ou qui écrit, se référant à lui (ou elle) seul</span></li> --}}
                      <li> <h4>"prendre la direction de"</h4> </li>
                      <div class="bungkus-p">
                        <p class="isi-dictionary">
                          kapal perang mengarah ke timur<span style="color: #32caeb;"></span>
                        </p>
                        <p class="isi-dictionary">
                         le beteau de guerre se dirige vers i'est
                        </p>
                      </div>
                      {{-- <li>- <span style="color: #32caeb;">Première personne du singulier</span></li> --}}
                      <li><h4> "viser,pointer,tendre"</h4></li>
                      <div class="bungkus-p">
                        <p class="isi-dictionary">
                          tangannya mengarah ke muka<span style="color: #32caeb;"></span>
                        </p>
                        <p class="isi-dictionary">
                          il tend la main devant lui
                        </p>
                      </div>
                    </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <!-- works section end -->
      <div class="subscribe_section">
        <div class="container">
          <div class="subscribe_main">
            <div class="subscribe_left">
              <h1 class="Subscribe_text">Subscribe Now</h1>
            </div>
            <div class="subscribe_middle">
              <input type="text" class="Enter_text" placeholder="Enter your email" name="Enter your email">
            </div>
            <div class="subscribe_right">
              <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- contact section end -->

      <!-- copyright section start -->
      <div class="copyright_section">
        <div class="container">
          <p class="copyright_text">Copyright 2022 All Right Reserved.<a href="https://html.design"> Free  html Templates</a></p>
        </div>
      </div>
      <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/popper.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
 
   <!-- sidebar -->
   <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>
   <!-- javascript --> 
   <script src="{{asset('js/owl.carousel.js')}}"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
   </html>