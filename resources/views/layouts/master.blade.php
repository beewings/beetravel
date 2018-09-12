<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('head.title')</title>
    <link rel="stylesheet" href="/css/components.css">
    <link rel="stylesheet" href="/css/icons.css">
    <link rel="stylesheet" href="/css/responsee.css">
    <link rel="stylesheet" href="/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="/css/lightcase.css">  
    <link rel="stylesheet" href="/css/boostrap.min.css">
    <link rel="stylesheet" href="/css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>   
    <style type="text/css">
      @import url('http://weloveiconfonts.com/api/?family=entypo');
    </style>
    <link rel="stylesheet" href="/css/app.css">
    
<link type="text/css" rel="stylesheet" href="style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>

  <body class="size-1280">
    
    @yield('body.header')
    @yield('body.content')
    @yield('body.footer')
    



    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="1130642526968079"
      theme_color="#0084ff">
    </div>
    <script type="text/javascript" src="/js/boostrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/responsee.js"></script>
    <script type="text/javascript" src="/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/template-scripts.js"></script> 
    @yield('body.js')
  </body>
</html>
<!-- Load Facebook SDK for JavaScript -->
