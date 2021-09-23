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
    <header>
      <nav id="navbar">
        <div class="container">
          <h1 class="logo"><a href="/">HBT</a></h1>
          <ul>
            <li><a class="current" href="/">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <div id="showcase">
        <div class="container">
          <div class="showcase-content">
            <h1><span class="text-primary">Enjoy</span> Your Stay</h1>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rerum
              porro quas in consectetur eius.
            </p>
            <a href="about" class="btn">About Our Hotel</a>
          </div>
        </div>
      </div>
    </header>
    <section id="home-info" class="bg-dark">
      <div class="info-img"></div>
      <div class="info-content">
        <h2><span class="text-primary">The History </span>Of Our Hotel</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore,
          magnam? Facilis non hic, saepe reprehenderit dignissimos culpa
          consequatur aliquam cumque incidunt omnis? Soluta earum dolores enim
          ipsum est, voluptate ea inventore at, in laudantium commodi nam
          pariatur modi aliquam sapiente.
        </p>
        <a href="about" class="btn btn-light">Read More</a>
      </div>
    </section>
    <section id="features">
      <div class="box bg-light">
        <i class="fas fa-hotel fa-3x"></i>
        <h3>Great Location</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, sit?
        </p>
      </div>
      <div class="box bg-primary">
        <i class="fas fa-utensils fa-3x"></i>
        <h3>Free Meal</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, sit?
        </p>
      </div>
      <div class="box bg-light">
        <i class="fas fa-dumbbell fa-3x"></i>
        <h3>Fitness Room</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, sit?
        </p>
      </div>
    </section>
    <div class="clr"></div>
    <footer id="main-footer">
      <p>Hotel BT &copy; 2019, All right reserved</p>
    </footer>
  </body>
</html>
