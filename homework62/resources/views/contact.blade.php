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
    <title>Hotel BT | Contact</title>
  </head>

  <body>
    <header>
      <nav id="navbar">
        <div class="container">
          <h1 class="logo"><a href="/">HBT</a></h1>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a class="current" href="contact">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <section id="contact-form" class="py-3">
      <div class="container">
        <h1 class="l-heading"><span class="text-primary">Contact </span>Us</h1>
        <p>Please fill out the form below to contact us</p>
        <form action="process.php">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea type="text" name="message" id="message"></textarea>
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </section>
    <section id="contact-info" class="bg-dark">
      <div class="container">
        <div class="box">
          <i class="fas fa-hotel fa-3x"></i>
          <h3>Location</h3>
          <p>50 Main st, Boston MA</p>
        </div>
        <div class="box">
          <i class="fas fa-phone fa-3x"></i>
          <h3>Phone No.</h3>
          <p>(044)5558888</p>
        </div>
        <div class="box">
          <i class="fas fa-envelope fa-3x"></i>
          <h3>Email Address</h3>
          <p>frontdesk@hotelbt.com</p>
        </div>
      </div>
    </section>

    <footer id="main-footer">
      <p>Hotel BT &copy; 2019, All right reserved</p>
    </footer>
  </body>
</html>
