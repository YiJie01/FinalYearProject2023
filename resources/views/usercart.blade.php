@extends('layouts.topbar')

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
<style>


.shopping-cart .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.shopping-cart .block-heading p{
	text-align: center;
	max-width: 420px;
	margin: auto;
	opacity:0.7;
}

.shopping-cart .dark .block-heading p{
	opacity:0.8;
}

.shopping-cart .block-heading h1,
.shopping-cart .block-heading h2,
.shopping-cart .block-heading h3 {
	margin-bottom:1.2rem;
	color: #3b99e0;
}

.shopping-cart .items{
	margin: auto;
}

.shopping-cart .items .product{
	margin-bottom: 20px;
	padding-top: 20px;
	padding-bottom: 20px;
}

.shopping-cart .items .product .info{
	padding-top: 0px;
	text-align: center;
}

.shopping-cart .items .product .info .product-name{
	font-weight: 600;
}

.shopping-cart .items .product .info .product-name .product-info{
	font-size: 14px;
	margin-top: 15px;
}

.shopping-cart .items .product .info .product-name .product-info .value{
	font-weight: 400;
}

.shopping-cart .items .product .info .quantity .quantity-input{
    margin: auto;
    width: 80px;
}

.shopping-cart .items .product .info .price{
	margin-top: 15px;
    font-weight: bold;
    font-size: 22px;
 }

.shopping-cart .summary{
	
    height: 100%;
    padding: 30px;
}

.shopping-cart .summary h3{
	text-align: center;
	font-size: 1.3em;
	font-weight: 600;
	padding-top: 20px;
	padding-bottom: 20px;
}

.shopping-cart .summary .summary-item:not(:last-of-type){
	padding-bottom: 10px;
	padding-top: 10px;
	border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.shopping-cart .summary .text{
	font-size: 1em;
	font-weight: 600;
}

.shopping-cart .summary .price{
	font-size: 1em;
	float: right;
}

.shopping-cart .summary button{
	margin-top: 20px;
}

@media (min-width: 768px) {
	.shopping-cart .items .product .info {
		padding-top: 25px;
		text-align: left; 
	}

	.shopping-cart .items .product .info .price {
		font-weight: bold;
		font-size: 22px;
		top: 17px; 
	}

	.shopping-cart .items .product .info .quantity {
		text-align: center; 
	}
	.shopping-cart .items .product .info .quantity .quantity-input {
		padding: 4px 10px;
		text-align: center; 
	}
}

</style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
function calculateTotal() {
    var prices = document.getElementsByName('price[]');
    var total = 0;
    var checkboxes = document.getElementsByName('item[]');

    var len = checkboxes.length;
    var subtotal = 0;

    for (var i = 0; i < len; i++) {
        if (checkboxes[i].checked) {
            subtotal += parseFloat(prices[i].value);
        }
    }


    var discount = subtotal * 0.05;
    var finalTotal = subtotal - discount;


    document.getElementById('subtotal').innerText = 'RM' + subtotal.toFixed(2);
    document.getElementById('discount').innerText = '5%';
    document.getElementById('total').innerText = 'RM' + finalTotal.toFixed(2);
}


var checkboxes = document.getElementsByName('item[]');
checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener('change', calculateTotal);
});


document.addEventListener('DOMContentLoaded', calculateTotal);
document.getElementById('amount').value=subtotal.toFixed(2);
document.getElementById('totalInput').value = finalTotal.toFixed(2);

</script>


<!--<script src="{{ asset('js/cart.js') }}" async></script> 
<script src="{{ asset('js/cart.js') }}" defer></script>-->
<br><br><br>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">

<body>
	<main class="page">
	 	<section class="shopping-cart dark">
	 		<div class="container">
             <fieldset class="container border p-2">
	            <legend class="w-auto">Cart</legend>
                
                

		        <div class="content">
	 				<div class="row">
                        
	 					<div class="col-md-12 col-lg-8">
                                    
	 						<div class="items">
                             @foreach($carts as $cart)
                             @csrf
                            <form method="post" action="{{ route('create.userOrder') }}" > 
				 				<div class="product">
				 					<div class="row"> 
                                        
					 					<div class="col-md-3">
					 						<img class="img-fluid mx-auto d-block image" src="{{ asset('images/') }}/{{$cart->image}}">
					 					</div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
												 <td><input type="hidden" name="item[]" name="amount" id="amount"  value="{{$cart->cid}}" onchange="calculateTotal()" checked></td>
							 						<div class="col-md-5 product-name">
							 							<div class="product-name">
														 <td><input type="hidden" value="{{$cart->id}}" name="id" id="id"></td>	
														

								 							<a href="#">{{$cart->name}}</a>
								 							<div class="product-info">
									 							<div>Description: <span class="value"><br>{{$cart->description}}</span></div>

									 						</div>
															 
									 					</div>
							 						</div>
							 						<div class="col-md-4 quantity">
							 							<label for="quantity">Quantity:</label><br>
														 <!--<button type="button" wire:click="decrementQuantity({{$cart->id}})" class="btn btn-warning" ><i class="fa fa-minus">-</i></button>-->
														 <input id="quantity" type="number" value ="1" class="form-control quantity-input" name="quantity">
														 <!--<button type="button" wire:click="incrementQuantity({{$cart->id}})" class="btn btn-info" ><i class="fa fa-plus">+</i></button>-->
							 							
														
							 						</div>
							 						<div class="col-md-3 price">
							 							<span>RM{{$cart->price}}</span>
														 <input type="hidden" name="price[]" value="{{$cart->price}}" id="price[]">
                                                         
							 						</div>

                                                     
                                                    
							 					</div>
							 				</div>
                                            
					 					</div>
                                        
					 				</div>
                                    <div class="col-md-4 quantity">
                                                         
														 
														<a href="{{ route('deletecart', ['id' => $cart->cid]) }}" 
 															class="btn btn-danger" onclick="return confirm('Confirm Delete?')">Delete</a>
                                                    </div>
				 				</div>
				

				 				
				 		@endforeach	

				 			</div>
			 			</div>	
			 			<div class="col-md-12 col-lg-4">
			 				<div class="summary">
			 					<h3>Summary</h3>
			 					<div class="summary-item">
                                    <span class="text">Subtotal</span>
                                    <span class="price" id="subtotal">RM<input type="hidden" value=""  readonly/>
									
									</span>
                                </div>
			 					<div class="summary-item"><span class="text" >Discount</span><span class="price" id="discount">5%</span></div>
			 					<div class="summary-item"><span class="text" >Total</span><span class="price" id="total" >RM</span></div>
								 <input type="hidden" name="amount" id="amount" onchange="calculateTotal()"  value="">
								 <input type="hidden" name="total" id="totalInput" onchange="calculateTotal()" value="">
								 
			 					<button type="submit" class="btn btn-primary btn-lg btn-block" name="checkout" value="Order">Order</button>

								<a href="/foodMenu" target="_blank"><button class="btn btn-warning btn-lg btn-block">Continu Order</button></a>
				 			</div>
			 			</div>
		 			</div> 
                     
                </form>   
		 		</div>
	 		</div>
		</section>
	</main>
</fieldset>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
