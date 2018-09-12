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
          <div class="col-12 col-md-8" style="border-left: 1px solid #cdcdcd;"> <br> <br>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/hanoibg.jpg" style="height: 450px;" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/hanoishow.jpg" style="height: 450px;" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/hanoishow2.jpg" style="height: 450px;" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-6 col-md-4"">
            <br> <br>
            <ul class="list">
              <li class="list-item" style="border-bottom: 1px solid #cdcdcd; font-size: 18px;">Cras justo odio</li>
              <li class="list-item" style="padding-top: 20px; border-bottom: 1px solid #cdcdcd; font-size: 18px;">Dapibus ac facilisis in</li>
              <li class="list-item" style="padding-top: 20px; border-bottom: 1px solid #cdcdcd; font-size: 18px;">Morbi leo risus</li>
              <li class="list-item" style="padding-top: 20px; border-bottom: 1px solid #cdcdcd; font-size: 18px;">Porta ac consectetur ac</li>
              <li class="list-item" style="padding-top: 20px; border-bottom: 1px solid #cdcdcd; font-size: 18px;">Vestibulum at eros</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  <!--  <section class="section-small-padding background-dark text-center">      
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
    </section>  -->
  </main>
@stop
@section('body.footer')
  @include('partials.footer')
@stop