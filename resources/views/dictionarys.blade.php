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
      <title>Dictionary</title>
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
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
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
              <div class="logo"><a href="#"><img src="{{asset('images/logo.png')}}"></a></div>
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
                  {{-- <p class="call_text"><a href="#">Call:+01 9876543210</a></p> --}}
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
                  <div class="bulat">
                    <div class="circle-container-bulet">
                      <div class="circle-bulet a " id="circle-bulet-a" huruf="a">
                        <h1>
                          <a href="{{route ('huruf', ['huruf' => 'A'])}}">A</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-b" huruf="b">
                        <h1>
                          <a href="#">B</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-c" huruf="c">
                        <h1>
                          <a href="#">C</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-d" huruf="d">
                        <h1>
                          <a href="#">D</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-e" huruf="e">
                        <h1>
                          <a href="#">E</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-f" huruf="f">
                        <h1>
                          <a href="#">F</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-g" huruf="g">
                        <h1>
                          <a href="#">G</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-h" huruf="h">
                        <h1>
                          <a href="#">H</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-i" huruf="i">
                        <h1>
                          <a href="#">I</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-j" huruf="j">
                        <h1>
                          <a href="#">J</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-k" huruf="k">
                        <h1>
                          <a href="#">K</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-l" huruf="l">
                        <h1>
                          <a href="#">L</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-m" huruf="m">
                        <h1>
                          <a href="#">M</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-n" huruf="n">
                        <h1>
                          <a href="#">N</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-o" huruf="o">
                        <h1>
                          <a href="#">O</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-p" huruf="p">
                        <h1>
                          <a href="#">P</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-q" huruf="q">
                        <h1>
                          <a href="#">Q</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-r" huruf="r">
                        <h1>
                          <a href="#">R</a>
                        </h1>
                      </div>
                      <div class="circle-bulet"  id="circle-bulet-s" huruf="s">
                        <h1>
                          <a href="#">S</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-t" huruf="t">
                        <h1>
                          <a href="#">T</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-u" huruf="u">
                        <h1>
                          <a href="#">U</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-v" huruf="v">
                        <h1>
                          <a class="aku" href="">V</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-w" huruf="w">
                        <h1>
                          <a class="aku" href="#">W</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-x" huruf="x">
                        <h1>
                          <a class="aku" href="#">X</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-y" huruf="y">
                        <h1>
                          <a class="aku" href="#">Y</a>
                        </h1>
                      </div>
                      <div class="circle-bulet" id="circle-bulet-z" huruf="z">
                        <h1>
                          <a class="aku" href="#">Z</a>
                        </h1>
                      </div>
                    </div>
                    {{-- <h1 class=" huruf"><a href="#">I AM</a></h1> --}}
                    {{-- <h1 class="number_text huruf"><a href="#">I AM</a></h1> --}}
                    {{-- <h1 class="number_text huruf"><a href="#">I AM</a></h1> --}}
                  </div>
              </div>
            </div>
          </div>
          </div>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="container">
              <div class="parenwordbyw-div">
                <input type="hidden" id="hurufInput" value="{{$huruf}}">
                @if ($kamuses)
                    @if ($kamuses->count() > 0)
                        @foreach ($kamuses as $kamus)
                            <a class="wordbyw" href="{{ route('dictionary', ['id' => $kamus->id]) }}">{{ $kamus->indonesia }}</a>
                        @endforeach
                    @else
                    
                    @endif
                @endif

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
<br>
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
   <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
   <script>
    $( document ).ready(function() {
        $(".circle-bulet").click(function() {
          var huruf = $(this).attr("huruf");
          // console.log(huruf);
          var url = "{{ route('huruf', ['huruf' => 'PLACEHOLDER' ]) }}";
          url = url.replace('PLACEHOLDER', huruf);
          window.location.href = url;
        });

        $(document).ready(function() {
          var ff = $("#hurufInput").val();
          $(`.circle-bulet[huruf='${ff}']`).addClass("huruf-active");
          console.log(ff);
        });
    });
  </script>
   </body>
   </html>