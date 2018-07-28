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
    <!-- <link rel="stylesheet" href="css/lightcase.css"> -->
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="/css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>   
  </head>

  <body class="size-1280">
    <a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    
    @yield('body.header')
    @yield('body.content')
    @yield('body.footer')

    <script type="text/javascript" src="/js/responsee.js"></script>
    <script type="text/javascript" src="/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/template-scripts.js"></script> 
    @yield('body.js')
  </body>
</html>