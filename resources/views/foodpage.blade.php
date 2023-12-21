@extends('layouts.topbar')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- top bar-->
<!-- -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
            .line{
                width: 72%;
                height: 47px;
                border-bottom: 1px solid black;
                position: absolute;
                padding-top: 100px;
            }
</style>

			<style>

            .info_info {
                padding-left: 5px;
                border: none;
                overflow: hidden;
                
            }
            
            .info_info tr{
                float: left;
                width: 30%;
                margin: 0px;
                padding: 0px;
                height: 30px;
                line-height: 30px;
            }

            .div{
                display: block;
            }
            .backgroup{
                background-image:url("image/gamestorelogo3.jpg");
                                 
            }


            a:link {

            text-decoration:none;
            font-family: 'Nunito', Cursive;
            }

            

        </style>
        <br><br><br>
        <fieldset>
        <fieldset class="container border p-2" style="overflow:hidden;">
        
        @foreach($food_manages as $food)
        <form action="{{ route('usercart') }}" method="post">
        @csrf
            <table>
                <div  style="padding: 10px;">
                    <div >
                        <img width="400" height="352" src="{{ asset('images/') }}/{{$food->image}}" />
                    </div>
                </div>
                    <br>
                    <div class="col-xs-5" style="border:0px solid gray">
                    <input type="hidden" name="id" id="id" value="{{$food->id}}">
                    <tr>    
                        <th style="padding-right: 150px;">   
                            <input type="hidden" id="name" name="name" value="{{$food->name}}">
                            <span style="font-weight: bold;font-size:150%;" >Food Name: {{$food->name}}</span>
                            
                        </th>
                        <th style="padding-right: 150px;">
                            <input style="font-weight: bold;" type="hidden" id="price" name="price" value="{{$food->productprice}}">
                            <span style="font-weight: bold;font-size:150%;">Food Price: RM{{$food->price}}</span>
                            
                        </th>   

                    </tr>
                    <tr>
                        <button class="btn btn-warning" type="submit" style="float:right;btn btn-success;">Add To Cart</button>
                        <div style="height: 100px">Quantity <input type="number" name="quantity" id="quantity" value="1" min="1" max="10">
                        <!--<button type="button"style="float:right" >Buy</button>-->
                    <tr>
                </div>
            </table>

        </form>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray">
                        
                            <span style="font-weight: bold;font-size: 16px;font-size:200%;">Food Description:</span>
                            <p style="line-height:23px;font-size:180%;">
                                {{$food->description}}
                            </p>
                @endforeach   
            </fieldset>                        
			</fieldset>