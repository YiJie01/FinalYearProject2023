@extends('AdminHome')
<!---->
@section('AddFoodPage')
<style>
form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        label {
            display: block;

            margin-bottom: 10px;
        }



</style>
<div style="text-align:center">
<form class="subform"  method="post" action="{{ route('addFood') }}" enctype="multipart/form-data">
@csrf

<div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title" style="padding-right: 300px;">Add Food</h3>
                  </div>
                </div>
              </div>
              <br>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <tbody>
                    <form>
                        <p>
                            <label for="FoodID" style="font-size:130%;">Food ID:</label>
                            <input type="text" name="foodid" id="foodid">
                        </p>
                        <!--Name-->
                        <p>
                            <label for="FoodName" style="font-size:130%;">Food Name:</label>
                            <input type="text" name="foodname" id="foodname">
                        </p>

                        <p align="center">
                
                        <select style="width:150px;text-align:center" name="CategotyID" id= "" class="form-control">
					            <option  value="">Select Category</option>
                        @foreach($categories as $food)
                        
                                <option  value="{{$food->id}}">{{$food->name}}</option>
                                
                        @endforeach    
                        </select> 
	                    </p>

                        <p>
                            <label for="FoodPrice" style="font-size:130%;">Food Price:</label>
                            <input type="text" name="price" id="price">
                        </p>
<br>
                        <p align="center">
                          Select image to upload:
                          <input type="file" name="food-image" id="fileToUpload">
                        </p>
<br>
                        <p> 
                            <label for="FoodQuantity" style="font-size:130%;">Food Quantity:</label>
                            <input type="text" name="quantity" id="quantity">
                        </p>

                        <p>
                            <label for="Description" style="font-size:130%;">Food Description:</label>
                            <textarea name="description" id="description"></textarea>
                        </p>

                        <!---->
                        <br>
                        <p>
                            <input type="submit" name="insert" value="Insert">
                        </p>
                        
                    </form>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection