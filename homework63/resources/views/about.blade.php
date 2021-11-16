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
    <title>Hotel BT | About</title>
  </head>
  <body>
@include('nav')
    <section id="about-info" class="bg-light py-3">
      <div class="container">
        <div class="info-left">
          <h1 class="l-heading">
            <span class="text-primary">About </span>Hotel BT
          </h1>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, ad
            labore! Quos repellendus exercitationem explicabo magni, ea possimus
            natus tempora eos soluta animi in, ad numquam, culpa sit est
            consequuntur.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque
            non molestiae, voluptas nemo consequatur similique architecto. Quae,
            esse dolorem.
          </p>
        </div>
        <div class="info-right">
          <img src="./img/photo-2.jpg" alt="Hotel" />
        </div>
      </div>
    </section>

    <div class="clr"></div>

    <section id="testimonials" class="py-3">
      <div class="container">
        <h2 class="l-heading">What our guests say</h2>
        @foreach ($guests as $guest )
        <div class="testimonial bg-primary">
          <img src="{{$guest['image']}}" alt="{{$guest['name']}}" />
          <p>
           {{$guest['bio']}}
          </p>
        </div>
        @endforeach
      </div>
    </section>
@include('footer')
  </body>
</html>
