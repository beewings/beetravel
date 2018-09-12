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
      <div class="row" style="margin-top: 30px; font-size: 20px; border-bottom: 1px solid #cdcdcd;">
        <div class="about" style="display: inline-block;text-transform: uppercase; margin-right: 20px; margin-left: 90px; color: #000000; border-bottom: 2px solid #28a5df;"><a href="#about2"  style="color: #000000; text-transform: uppercase; text-decoration:none;">About</a></div>
        <div class="rating"><a href="#rating2"  style="color: #000000; text-transform: uppercase; text-decoration:none;">Rating & Review</a></div>
      </div>
      <div class="row" style="margin-top: 20px;position: relative; ">
        <div class="col-8">
          <div id="about2" style="border-bottom: 1px solid #cdcdcd;">
            <br>
            <p style="color: #000000;"><strong>STAGE 1</strong></p>

            <p style="color: #000000;"><strong>1. Pronunciation - </strong>To prevent learners learning new words with incorrect pronunciation.</p>

            <p style="color: #000000;"><strong>2. Vocabulary - </strong>Teaching the words they need to know, with the correct pronunciation.</p>

            <p style="color: #000000;"><strong>3. Grammar - </strong>Because it's like a foundation. Stronger the foundation, the better the house.</p>

            <p style="color: #000000;"> <strong>4. Practice - </strong>Practice makes perfect! :-)</p>

            <p style="color: #000000;"><strong>STAGE 2</strong></p>

            <p style="color: #000000;"><strong>1. Listening - </strong>Because it's the first thing my learners did to learn their own language.</p>

            <p style="color: #000000;"><strong>2. Speaking - </strong>Next thing they did as a child and practiced until they mastered fluency.</p>

            <p style="color: #000000;"><strong>3. Reading - </strong> It helps them understanding how English forms.</p>

            <p style="color: #000000;"><strong>4. Writing - </strong>To attain perfection in interpreting ideas into words.</p>

            <p style="color: #000000;"><strong>STAGE 3</strong></p>

            <p style="color: #000000;"><strong>1. Motivation - </strong>More motivation they get, more faster they will learn.</p>

            <p style="color: #000000;"><strong>2. Time - </strong>Longer they spend time in learning, more they will learn.</p>

            <p style="color: #000000;"><strong>3. Quality - </strong>I want them to learn correctly from the first time and fix their mistakes. 30 minutes per day is better than 3.5 hours per week.</p>

            <p style="color: #000000;"><strong>4. Practice - </strong>Because it's the practice that makes perfect! :) </p>
          </div>
          <div id="rating2" style="margin-top: 30px;">
            <h4 style="display: inline-block;">Rating & Reviews:</h4>
            <a href="{{ route('writereviews') }}" target="_blank"> Write reviews</a>
            <hr>
          </div>
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
      <div class="col-4">
          <div class="video" style="width: 350px; height: 300px;">
            <iframe width="350" height="250" src="https://www.youtube.com/embed/neCmEbI2VWg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="bookingnow">
            <a href="{{ route('guide.booking') }}" target="_blank" style="border-top: 1px solid #cdcdcd; border-left: 1px solid #cdcdcd; border-right: 1px solid #cdcdcd;border-bottom: 1px solid #cdcdcd;border-radius: 25px;text-decoration: none; padding: 14px 125px; background-color: #28a5df;color: #ffffff;"> Booking Now</a>
          </div>
        </div>
    </div>
  </main>
@stop
@section('body.footer')
  @include('partials.footer')
@stop
