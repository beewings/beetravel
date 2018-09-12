<!--
<header role="banner" class="position-absolute">
  <nav class="background-transparent background-primary-dott full-width sticky">          
    <div class="top-nav"> 
      <div class="logo hide-l hide-xl hide-xxl">
        <a href="index.html" class="logo">
          <img class="logo-white" src="img/logo2.png" style="width: 120px; height: 60px;" alt="">
          <img class="logo-dark" src="img/logo2.png" style="width: 100px; height: 50px;" alt="">
        </a>
      </div>                  
      <p class="nav-text"></p>
      <div class="top-nav left-menu">
        <ul class="right top-ul chevron">
          <li><a href="index.html" style="color: black;">Home</a></li>
          <li><a href="about-us.html" style="color: black;">Tour Ha Noi</a></li>
          <li><a href="services.html" style="color: black;">Tour Viet Nam</a></li>
        </ul>
      </div>
      <ul class="logo-menu">
        <a href="index.html" class="logo">
          <img class="logo-white" src="img/logo2.png" style="width: 120px; height: 60px;" alt="">
          <img class="logo-dark" src="img/logo2.png" style="width: 100px; height: 50px;" alt="">
        </a>
      </ul>
      <div class="top-nav right-menu">
        <ul class="top-ul chevron">
          <li><a href="gallery.html" style="color: black;">About Us</a></li>
          <li><a href="contact.html" style="color: black;">Contact</a></li>
          <li><a style="color: black;">News</a></li>
        </ul> 
      </div>
    </div>
  </nav>
</header>
-->
<header class="nav-header1">
  <nav style="background-color: #ffffff; position: fixed;border-bottom: 1px solid #cdcdcd;">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home.home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tourhanoi.show') }}">Tour Ha Noi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tourvietnam.show') }}">Tour Viet Nam</a>
      </li>
      <li class="nav-item"><a href="">
          <img class="logo-white" src="img/logo2.png" style="width: 100px; height: 50px;" alt=""></a></li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('aboutus') }}">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('news') }}">News</a>
      </li>
    </ul>
  </nav>
</header>