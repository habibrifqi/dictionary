@extends('layouts.base_login')

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="contact_section layout_padding">
  <div class="container">
    <h1 class="some_text">Log  <span style="color: #32caeb;">In</span></h1>
    <div class="mail_section">
      <form method="POST" action="{{ route('login.submit') }}">
        @csrf
      <input type="Email" id="email" class="mail_text" placeholder="Your Email" name="email">
      <!-- <input type="Name" class="mail_text" placeholder="Phone Number" name="Phone Number"> -->
      <input type="password" id="password" class="mail_text" placeholder="password" name="password">
    </div>
    <div class="send_bt">
           @error('email')
                <span class="text-danger">{{ $message }}</span>
                
            @enderror
        {{-- <div class="send_text"><a href="#">Send</a></div> --}}
        <button type="submit" class="send_text_login">Login</button>
    </div>
  </form>
  </div>
</div>
@endsection