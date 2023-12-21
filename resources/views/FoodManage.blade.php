@extends('AdminHome')
@section('foodmanage')
<!--category--->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<!------ Include the above in your HEAD tag ---------->
<style>
.line{
                width: 20%;
                height: 47px;
                border-bottom: 1px solid black;
                position: absolute;
                padding-top: 135px;
            }
</style>

<br><br><br>
@csrf
<div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Food Manage</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create"  onclick="window.location.href='/addFood';">Create New</button>
                  </div>
                </div>
              </div>
              @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
              {{session()->get('message')}}

          </div>
          @endif
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>image</th>
                        <th>Product Name</th>
                        <th>Product Price(RM)</th>
                        <th>Product Category</th>
                        <th>Product Description</th>  
                    </tr> 
                  </thead>
                  <tbody>
                  @foreach($food_manages as $food)
                          <tr>
                            <td align="">
                              <a href="{{route('editFood',['id'=>$food->id])}}" class="btn btn-default" ><em class="fa fa-pencil"></em></a>
                              <a href="{{route('deleteFood',['id'=>$food->id])}}" class="btn btn-danger" onClick="return confirm('Are you sure to delete?')"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">{{$food->id}}</td>
                            <td><img src="{{ asset('images/') }}/{{$food->image}}" alt="" width="50" height="50"></td>
                            <td>{{$food->name}}</td>
                            <td>RM{{$food->price}}</td>
                            <td>{{$food->categoryID}}</td>
                            <td>{{$food->description}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">

                      {{$food_manages->links()}}
                    </ul>

                  </div>
                </div>
              </div>
            </div>

</div></div></div>
		
@endsection