
@extends('layouts.topbar')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- top bar-->
<!-- -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!----page css ----->
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
<!------ Include the above in your HEAD tag ---------->

        <!---->
        <title>FoodOrdering</title>

        <!-- Styles -->
        <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .img{
                position: absolute;
                top: 8px;
                left: 16px;
                width: 85px;
                height: 85px;
            }

            .img1{
                height: 352px;
                max-width:100%;
            }

            .fieldset{
                border:50px
            }
                
        </style>

    <!-- top list bar -->
    
    <!--end-->
    <!---->
    <!--search-->

    
<br><br>
    
    <!--end-->
<!-- Coming Soon list -->

<body></body>
<br><br>
<h2 align="center" style="font-size:250%;">Welcome</h2>
            <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      FoodOrderEase
                    </h1>
                    <p>
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      FoodOrderEase
                    </h1>
                    <p>
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      FoodOrderEase
                    </h1>
                    <p>
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                    <div class="btn-box">
                      <a href="/foodMenu" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->

<br>

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>
<!--- category-->
      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".Burger">Burger</li>
        <li data-filter=".Pizza">Pizza</li>
        <li data-filter=".Pasta">Pasta</li>
        <li data-filter=".Rice">Rice</li>
      </ul>
<!---end category-->
@foreach($food_manages as $food)

  @csrf
      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all {{$food->categoryID}}">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="{{ asset('images/') }}/{{$food->image}}" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  {{$food->name}}
                  </h5>
                  <p>
                  {{$food->description}}
                  </p>
                  <div class="options">
                    <h6>
                      RM{{$food->price}}
                    </h6>
                    <button class="btn btn-warning" type="" style="float:right;btn btn-success;"><a href="/Food/{{$food->id}}">Order</a></button>
                    <!--<img src="images/cart.png" width="50" height="35">-->
                      </svg>
                      
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      @endforeach
      
      <div class="btn-box">
        <a href="{{ url('/foodMenu') }}">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->
<!-- middle list(Hot list) -->


<fieldset>
<h2 align="center" style="font-size:250%;">Host List</h2>
        <div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/Game/1" target="_blank">
                                            <img src="{{ asset('image/Arknight.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/2" target="_blank">
                                            <img src="{{ asset('image/ARK.jpeg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/11" target="_blank">
                                            <img src="{{ asset('image/CSGO.jpg')}}" alt="Image"  class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/14" target="_blank">
                                            <img src="{{ asset('image/Nier.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/Game/13" target="_blank">
                                            <img src="{{ asset('image/Apex.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/10" target="_blank">
                                            <img src="{{ asset('image/Fate.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/19" target="_blank">
                                            <img src="{{ asset('image/PUBG.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/16" target="_blank">
                                            <img src="{{ asset('image/R6.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->
                </div>
            </div>
        </div>
</fieldset>

<!--end-->

<br>


</body>
<br>