@extends('layouts.topbar')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><!-- top bar-->
<!-- top list -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- mid list bar-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
.line{
                width: 72%;
                height: 47px;
                border-bottom: 1px solid black;
                position: absolute;
                padding-top: 135px;
            }
</style>


		<title>JJ Game Store</title>

		<style>
		html, body {
				color: #636b6f;
				font-family: 'Nunito', sans-serif;
				font-weight: 200;
				height: 100vh;
				margin: 0;
			}
			.logo{
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
            
            .border{
                border: 5px;
            }


		</style>
<br><br><br>
<!-- middle list(Hot list) -->
<fieldset>
            <div class="container text-center my-3">
                <h2 style="font-size:250%;">Hot List</h2>
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item row no-gutters active">
                            <div class="col-3 float-left"><img class="img1" src="{{ asset('image/Arknight.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img1" src="{{ asset('image/ARK.jpeg')}}"></div>
                            <div class="col-3 float-left"><img class="img1" src="{{ asset('image/CSGO.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img1" src="{{ asset('image/Nier.jpg')}}"></div>
                        </div>
                        <div class="carousel-item row no-gutters">
                            <div class="col-3 float-left"><img class="img1" src="{{ asset('image/Apex.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img1" src="{{ asset('image/Fate.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img1" src="{{ asset('image/PUBG.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img1" src="{{ asset('image/R6.jpg')}}"></div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </fieldset>
<!--end-->
<br>
<fieldset class="container border width: 5px">
	<legend class="w-auto" >Game List</legend>
	
		<table>	
        
        <!--@foreach($products as $namastatus)-->
        
			<li style="list-style-type:none">
				<table>
                
					<tr>
						<td rowspan = "2">
							<a href="/Game/{{$namastatus->productid}}" target="_blank"><img src="{{ asset('image/') }}/{{$namastatus->image}}" width="120" height="120"></a>
						</td>
						<td>
							<a href="/Game/{{$namastatus->productid}}" target="_blank" style="font-size:150%;">{{$namastatus->productname}}</a>
						</td>
					</tr>
					<tr>
						<td>
							<p style="font-size:150%;">{{$namastatus->type}}</p>
						</td>
					</tr>    
                </table>
<br>
		@endforeach
		    </li>
           
		</table>
        
        <table align="center">
        <td>
		    {{$products->links()}}
        </td>
        </table>
		<br>
		
		
</fieldset>