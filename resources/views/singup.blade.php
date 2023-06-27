@extends('layouts.base_login')

@section('content')
<div class="contact_section layout_padding">
  <div class="container">
    <h1 class="some_text">Sign  <span style="color: #32caeb;">UP</span></h1>
    <div class="mail_section">
      <form method="POST" action="{{route('register.store')}}">
        @csrf
      <input type="Name" id="name" class="mail_text" placeholder="Your Name" name="name">
      {{-- <input type="Name" nameclass="mail_text" placeholder="Phone Number" name="Phone Number"> --}}
      <input type="email" id="email" class="mail_text" placeholder="Email" name="email">
      <input type="password" id="password" class="mail_text" placeholder="password" name="password">
    </div>
    <div class="send_bt">
        {{-- <div class="send_text"><a href="#">Send</a></div> --}}
        <button type="submit" class="send_text_login">Sign Up</button>
    </div>
  </form>
  </div>
</div>
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
<!-- footer section start -->
<div class="footer_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="footer_logo"><img src="images/footer-logo.png"></div>
        <h1 class="customer_text">CUSTOMER SERVICE</h1>
        <p class="footer_text">here are many variat
ions of passages of L
orem Ipsum available
, but the majority h
ave suffered altera
tion in some form, by </p>
      </div>
      <div class="col-sm-6 col-lg-3">
        <h1 class="customer_text">LET US HELP YOU</h1>
        <p class="footer_text">here are many variat
ions of passages of L
orem Ipsum available
, but the majority h
ave suffered altera
tion in some form, by </p>
      </div>
      <div class="col-sm-6 col-lg-3">
        <h1 class="customer_text">INFORMATION</h1>
        <p class="footer_text">here are many variat
ions of passages of L
orem Ipsum available
, but the majority h
ave suffered altera
tion in some form, by </p>
      </div>
      <div class="col-sm-6 col-lg-3">
        <h1 class="customer_text">OUR SHOP</h1>
        <p class="footer_text">here are many variat
ions of passages of L
orem Ipsum available
, but the majority h
ave suffered altera
tion in some form, by </p>
      <div class="social_icon">
        <ul>
          <li><a href="#"><img src="images/fb-icon.png"></a></li>
          <li><a href="#"><img src="images/twitter-icon.png"></a></li>
          <li><a href="#"><img src="images/instagram-icon.png"></a></li>
          <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>  
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
  <div class="container">
    <p class="copyright_text">Copyright 2022 All Right Reserved.<a href="https://html.design"> Free  html Templates</a></p>
  </div>
</div>
@endsection