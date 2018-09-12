@extends ('layouts.master')
@section ('head.title')
  Profile Guide
@stop
@section ('body.header')
  @include('partials.navbar')
@stop
@section ('body.content')
  <main role="main">
    <div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-4">
          <img src="/img/honganh.jpg" class="rounded mx-auto d-block" alt="...">
        </div>
        <div class="col-8">
          <h4>Hong Anh (DaiSy)</h4>

          <div class="age"><img src="/img/girl.png" alt="" style="display: inline-block;"> <p style="display: inline-block;">22 Age</p></div>
          <div class="language">
            <span style="display: inline-block;">Use Language : </span> <img src="/img/england.png" alt="" style="display: inline-block; padding-left: 10px;"> <img src="/img/japan.png" alt="" style="display: inline-block; padding-left: 10px;"> <img src="/img/vietnam.png" alt="" style="display: inline-block; padding-left: 10px;">
          </div>
          <div class="star">
            <span class="heading">Customer Rating</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>4.1 average based on 254 reviews.</p>
            <hr style="border:3px solid #f1f1f1">
          </div>
        </div>
      </div>
      <div class="container" style="margin-top: 30px;">
        <h4>Your first-hand experiences really help other travelers. Thanks!</h4>
        <hr>
        @include('partials.rate')
      </div>
      
      <div class="row" style="margin-top: 20px;position: relative; ">
        <div class="container">
          <i style="font-size:24px" class="fa">&#xf044;</i><span style="margin-left: 20px;"><strong>1-10</strong> of 1000 reviews</span>
          <hr>
          <div class="user" style="height: 300px;">
            <div class="img" style="width: 200px; display: inline-block;">
              <img src="img/hanoibg.jpg" alt="" style="height: 80px;width: 80px;border-radius: 80px; margin-left: 50px; margin-top: 10px;">
              <p style="margin-left: 60px; margin-top: 12px; font-size: 12px;">Vietnam <br><strong>Shinji tien</strong></p>
            </div>
            <div class="content" style="display: inline-block; width: 500px;">
              <div class="row">
                <div class="star" style="display: inline-block;">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <p style="padding-left: 20px;">Reviewed today</p>
              </div>
              <div class="row">
                <h3>Nice Today</h3>
              </div>
              <div class="row">
                <p>We did the streetfood tour with our guide cash. She was enthousiastic kind and we really enjoyed the tour. </p>
              </div>
              <div class="row">
                <p><strong>Shinji Tien</strong> about <strong>DaiSy</strong></p>
              </div>
            </div>
            <hr>
            <br>
            <a href="" target="_blank" style="border-top: 1px solid #cdcdcd; border-left: 1px solid #cdcdcd; border-right: 1px solid #cdcdcd;border-bottom: 1px solid #cdcdcd;border-radius: 25px; padding: 15px 10px 15px 10px; text-decoration: none;" > See More ...</a>
          </div>
      </div>
    </div>
  </main>
@stop
@section('body.footer')
  @include('partials.footer')
@stop
