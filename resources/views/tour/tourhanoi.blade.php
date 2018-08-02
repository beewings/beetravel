@extends ('layouts.master')
@section ('head.title')
  Tour Ha Noi
@stop
@section ('body.header')
  @include('partials.navbar')
@stop
@section ('body.content')
  <main role="main">
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
            <img src="img/hanoibg.jpg" alt="" style="width:500px; height:400px;">
          </div>
          <div class="col">
            <h1>Always <b>Nearby</b></h1>
            <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
            <a class="text-primary" href="">Read more</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section-small-padding background-dark text-center">      
      <div class="line">
        <h2 class="text-white text-size-50 text-m-size-40 margin-bottom-20">Please Download App to choose<b> Tour Guide</b></h2>
        <div class="m-10 l-6 xl-4 center">
          <div class="margin">
            <a class="s-12 m-6 margin-s-bottom" href="/">
              <img class="full-img right" src="img/google-play.svg" alt="">
            </a>
            <a class="s-12 m-6" href="/">
              <img class="full-img" src="img/app-store.svg" alt="">
            </a>
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
    <section class="section-small-padding background-dark text-center">      
      <div class="line">
        <h2 class="text-white text-size-50 text-m-size-40 margin-bottom-20">Please Download App to choose<b> Tour Guide</b></b></h2>
        <div class="m-10 l-6 xl-4 center">
          <div class="margin">
            <a class="s-12 m-6 margin-s-bottom" href="/">
              <img class="full-img right" src="img/google-play.svg" alt="">
            </a>
            <a class="s-12 m-6" href="/">
              <img class="full-img" src="img/app-store.svg" alt="">
            </a>
          </div>
        </div>                                                                                               
      </div>       
    </section>     
  </main>
@stop
@section('body.footer')
  @include('partials.footer')
@stop