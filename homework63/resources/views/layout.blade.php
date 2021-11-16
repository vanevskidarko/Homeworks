<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="description"
      content="Welcome to the most extraordinary hotel in Nan"
    />
    <meta name="keywords" content="hotel, nan, thailand, north thailand" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ url ('css/style.css') }}" />
    <link
      rel="stylesheet"
      media="screen and (max-width: 768px)"
      href="{{url ('css/mobile.css')}}"
    />
    <title>Hotel BT | Welcome</title>
  </head>
  <body>
    @include('nav')
   @yield('content')
    <div class="clr"></div>
    <footer id="main-footer">
      <p>Hotel BT &copy; 2019, All right reserved</p>
    </footer>
  </body>
</html>
