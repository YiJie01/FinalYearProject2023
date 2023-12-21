@extends('layouts.topbar')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/jquery-3.4.1.min.js"></script>
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

  <!-- jQery -->
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
  </script>

<style>
    .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    justify-content: space-around;

    }
</style>

  <!-- food section -->
  @csrf
  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
       
      </div>
      
      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".Burger">Burger</li>
        <li data-filter=".Pizza">Pizza</li>
        <li data-filter=".Pasta">Pasta</li>
        <li data-filter=".Rice">Rice</li>
      </ul>
      @foreach($food_manages as $food)
      
      @csrf
      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all {$food->categoryID}}">
            <div class="box">
              <div>
                <div class="img-box">
                <a href="/Food/{{$food->id}}" target="_blank"><img src="{{ asset('images/') }}/{{$food->image}}" alt=""></a>
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
                    
                    <a href="/Food/{{$food->id}}" class="btn btn-warning" style="width: 50px;">Order</a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>   
        </div>
      </div>
  
      @endforeach
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->