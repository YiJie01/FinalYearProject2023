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
             <fieldset class="container border p-3">
	            <legend class="w-auto">Order</legend>
                
                

		        <div class="content">
	 				<div class="row">
                        
	 					<div class="col-md-12 col-lg-8">
                                    
	 						<div class="items">
                             @foreach($orders as $order)
                             @csrf
                            <form method="post" action="" > 
				 				<div class="product">
				 					<div class="row"> 
                                     <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr class="thead-dark">
                                                            <th>Oder No</th>
                                                            <th>Name</th>
                                                            <th>Category</th>
                                                            <th>Unit Price</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="height:1px;border-width:1px;color:black;background-color:white">

        <tr>
        <td>{{$order->orderID}}</td>
                
                <td style="max-width:300px">
					<h6>{{$order->name}}</h6>
                    <h6>Rice1</h6>
                    <h6>Bun</h6>		                   
				</td>

                <td><p>{{$order->quantity}}Rice</p>
                    <p>{{$order->quantity}}Bun</p>
                </td>

                <td>
                    <p>RM{{$order->price }}10</p>
                    <p>RM{{$order->price }}5</p>
                </td>

                <td>
                {{ $order->paymentStatus }}
		        </td>
                <!--<input type="hidden" name="id" id="id" value="">-->

			</div>
        <br>
   
            <hr style="height:1px;border-width:1px;color:white;background-color:white">
            
            <div class="crat-total">
                
            
            
            </div>
            <br>

            

                        <tr>
                        
                        </tr>
                        
                    
					</form>
						
			<br>	
            </div>				
            
             </table> 
       
                            
				

				 				
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
			 					<div class="summary-item"><span class="text" >Total</span><span class="price" id="total">RM</span></div>
                                <input class="btn btn-primary btn-lg btn-block" type="submit" name="paynow"  οnclick="javascript:this.form.action='" value="PayPal">
                                <input class="btn btn-success btn-lg btn-block" type="submit" name="paynow"  οnclick="javascript:this.form.action='" value="Stripe">
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