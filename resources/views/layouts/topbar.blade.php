<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="backgroup">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Food Ordering System</title>
    <title>{{ config('app.name', 'FoodOrderEase') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--logout bar-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Search  -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js" id="bootstrap-css"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
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

  
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
<!------ Include the above in your HEAD tag ---------->

    <style>
        html, body {
            background-image:url("image/gamestorelogo3.jpg"),linear-gradient(to bottom  ,#000000, #003973, #7AA1D2);
                color: #F3F3F3;
                font-family: 'Nunito', Cursive;
                font-weight: 200;
                
                margin: 0;
                box-sizing: border-box; 
                background-size: auto;
                
            }

            .logo{
                position: absolute;
                top: 5px;
                left: 5px;
                width: auto;
                height: 60px;
            }

            .backgroup{
                
                background-size: auto;
                                 
            }


            a:link {
            color:#F3F3F3;
            text-decoration:none;
            font-family: 'Nunito', Cursive;
            }

            @media (max-width: 600px) {
                .hide-on-mobile {
                    display: none;
                }

                nav {
                    background-color: black; 
                   
                }

                header{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100px;
                }

                
            }

            @media (min-width: 601px) {
                .truncate {
                     white-space: normal; /* 允许换行 */
                    width: auto; /* 自适应宽度 */
                }

                .hide-on-PC {
                    display: none;
                }

            }

            

            

        </style>

</head>

<body >
    <!-- header section strats -->
    <header class="header_section; hide-on-PC" >
    <div class="navbar fixed-top navbar-expand-md flex-nowrap navbar-new-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ url('/home') }}" >
          
          <span>
          &nbsp;&nbsp;FoodOrderEase &nbsp;&nbsp;
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto " style="color:black;">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/foodMenu') }}">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/myCart') }}">Cart</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/Order') }}">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/Booking') }}">Book Table</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    </header>
    <!-- end header section -->
    <div id="id" class="hide-on-mobile">
        <div class="flex-center position-ref full-height">      
            <nav class="navbar fixed-top navbar-expand-md flex-nowrap navbar-new-top">
                <a href="{{ url('/home') }}" class="navbar-brand"><img src="{{ asset('images/logo1.png')}}" class="logo" alt=""/></a>       
            </nav>   
        </div>
        <nav class="navbar fixed-top navbar-expand-md navbar-new-bottom"style="background-color: black;opacity: 80%;left: 160px;right: 160px;">
            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">

                <ul class="navbar-nav w-100 justify-content-center px-3" >
                    <li class="nav-item active" >
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/foodMenu') }}">Menu</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/myCart') }}">Cart</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/Order') }}">Order</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/Booking') }}">Booking</a>
                    </li>
                <ul>
                    <div>
                        <form action="" method="post">
                        {{ csrf_field() }}
                        @csrf
                        <div id="custom-search-input">
                                            <div class="input-group col-md-12">
                                                <input type="text" name="searchProduct" id="searchProduct" class=" search-query form-control" placeholder="Search" >
                                                <span >
                                                    <button class="btn btn-success" type="submit">
                                                        Search
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                        </form>
                    </div>
                </ul>                    
                </ul>

                <!-- login&register -->
                <ul class="nav navbar-nav mr-auto"></ul>
                <ul class="navbar-nav flex-row">
                @guest
                    <li class="nav-item">              
                            <a class="nav-link px-2" href="/login" onclick="showWindow('login',this.href);">Login</a>
                    </li>
                    @if(Route::has('register'))
                    <li class="nav-item" >
                        <a class="nav-link px-2" href="{{ url('/register') }}">Register</a>
                    </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="\home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                    </li>

                @endguest
                </ul>
                </ul>
            
            </div>
            
        </nav>
        
       
        <main class="py-4" >
        
                @yield('content')

        </main>
    </div>
    </div>
</body>
</html>