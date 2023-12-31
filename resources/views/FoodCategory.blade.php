@extends('AdminHome')
@section('category')
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

<div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
              @if(session()->has('deletemessage'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('deletemessage')}}

                </div>
              @endif
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Add Category</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create"  onclick="window.location.href='/addCategory';">Create New</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Category Name</th>
                        
                    </tr> 
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                          <tr>
                            <td align="">
                              <a href="{{route('editCategory',['id'=>$category->id])}}" class="btn btn-default" ><em class="fa fa-pencil"></em></a>
                              <a href="{{route('deleteCategory',['id'=>$category->id])}}" class="btn btn-danger" onClick="return confirm('Are you sure to delete?')"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">{{$category->id}}</td>
                            <td>{{$category->name}}</td>
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
                    <ul class="pagination visible-xs pull-right">

                    
                    </ul>

                  </div>
                </div>
              </div>
            </div>

</div></div></div>
		
@endsection