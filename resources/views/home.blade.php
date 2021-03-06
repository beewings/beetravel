@extends ('layouts.master')
@section ('head.title')
  Home
@stop
@section ('body.header')
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
@stop
@section ('body.content')
  <main role="main">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/hanoishow5.JPG" alt="First slide"  style="width: 100%;">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/hanoishow6.JPG" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/hanoishow7.JPG" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <section class="section background-white" style="padding-top: 70px;">      
      <div class="line text-center">
        <h2 class="text-dark text-size-50 text-m-size-40">BeeTravel <b>Tour Ha Noi</b></h2>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
        <hr class="break background-primary break-small break-center margin-bottom-50">
      </div> 
      <div class="container">
        <div class="row">
          <div class="col">
            <img src="img/hanoibg.jpg" class="img">
            <span>xem chi tiet</span>
          </div>
          <div class="col">
            <h1>Always <b>Nearby</b></h1>
            <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
            <a class="text-primary" href="{{ route('tourhanoi.show') }}">Read more</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section-top-padding background-white" style="padding-top: 50px; padding-bottom: 50px;">
      <div class="line text-center">
        <h2 class="text-dark text-size-50 text-m-size-40">BeeTravel <b>Tour Viet Nam </b></h2>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
        </p>
        <hr class="break background-primary break-small break-center margin-bottom-50">
      </div>
      <div class="line">
        <div class="margin2x">
          <div class="s-12 m-6 l-4 margin-bottom-60">
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Tam Dao</h3>
              <img src="/img/tamdaobg.jpg" class="rounded float-left" alt="..." style="width: 350px; height: 222px;">
              <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat</p>
              <a class="text-primary" href="/">Read more</a>                              
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-bottom-60">
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Nghe An</h3>
              <img src="/img/ngheanshow.jpg" class="rounded float-left" alt="..." style="width: 350px; height: 222px;">
              <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>
              <a class="text-primary" href="/">Read more</a>                
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-bottom-60">
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Quang Binh</h3>
              <img src="/img/quangbinhbg.jpg" class="rounded float-left" alt="...">
              <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>
              <a class="text-primary" href="/">Read more</a>                 
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-m-bottom-60">
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Hue</h3>
              <img src="/img/huebg.jpg" class="rounded float-left" alt="..." style="width: 350px; height: 222px;">
              <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>
              <a class="text-primary" href="/">Read more</a>                 
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-m-bottom-60">
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Hoi An</h3>
              <img src="/img/hoianbg.jpg" class="rounded float-left" alt="..." style="width: 350px; height: 222px;">
              <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>
              <a class="text-primary" href="/">Read more</a>                 
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-m-bottom-60">
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20"> Da Lat</h3>
              <img src="/img/bg3.jpg" class="rounded float-left" alt="..." style="width: 350px; height: 222px;">
              <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>
              <a class="text-primary" href="/">Read more</a>                 
            </div>
          </div>
        </div>
      </div>
    </section>
    <div>
      <div class="row">
        <div class="col">
          <img src="img/lotrinh.png" alt="">
        </div>
      </div>
    </div>
    <section class="section-small-padding background-grey">   
      <div class="margin2x">
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-1.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-2.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-3.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-1.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-4.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-5.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-3.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-1.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-5.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-4.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-1.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-2.png"/>
        </div>
      </div>
    </section> 
  </main>
@stop
@section('body.footer')
  @include('partials.footer')
@stop