<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>




<!------ Include the above in your HEAD tag ---------->
<style>

	.backgroup{	
		background-image:url("image/ganyu1.png");
        background-size: cover; 
		width: 100%;
		height: 100%;                 
    }

	div {
  

}

</style>

<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/Admin">
				Admin Controller
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>-->
			</form>
			<!-- Account -->
			<!--  -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/Admin" target="_blank">Visit Site</a></li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
					
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">SETTINGS</li>
							<li class=""><a href="#">Upload/Update Product</a></li>
							<!-- <li class=""><a href="#">Update Support</a></li>-->
							<li class=""><a href="#">User Refund Product</a></li>
							<li class="divider"></li>
							<li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
							</li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
<!---->

	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="/Admin">Home</a></li>
				<li><a href="/insertGame">Upload/Update Product</a></li>
				<!--<li><a href="#">//Update Support</a></li>-->
				<li><a href="/ProductMenu">View All Product</a></li>
				<li><a href="/UserRefund">User Refund Product</a></li>
				<li><a href="/Support">Upload/Update Support</a></li>
				<li><a href="/manageSupport">View All Support</a></li>
			</ul>
		</div>
		
		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Welcome Admin!
                </div>
				<div class="backgroup">
				<div class="panel-body">
					@yield('AdminNameList')
                </div>
                <div class="panel-body">
					@yield('insertpage')
					@yield('updatepage')
					@yield('allRefund')
					@yield('support')
					@yield('MS')
                </div>
				<div class="panel-body">
					@yield('productmenu')
                </div>
				</div>
            </div>
		</div>
	</div>