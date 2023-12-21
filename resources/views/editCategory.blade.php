@extends('AdminHome')
<!---->
@section('EditCategoryPage')
<div style="text-align:center">
<form class="subform"  method="post" action="{{ route('updateCategory') }}" enctype="multipart/form-data">
@csrf

<div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title" style="padding-right: 300px;">Edit Category</h3>
                  </div>
                </div>
              </div>
              <br>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <tbody>
                  @foreach($categories as $category)
                    </form >     
                         <p>
                            <label for="CategoryName" style="font-size:130%;">Category ID:</label>
                            <input type="text" name="id" id="id" value="{{$category->id}}" readonly>
                        </p>
                        <!--Name-->
                        <p>
                            <label for="CategoryName" style="font-size:130%;" >Category Name:</label>
                            <input type="text" name="name" id="name" value="{{$category->name}}">
                        </p>

                        <!---->
                        <br>
                        <p>
                            <input type="submit" name="insert" value="Update">
                        </p>
                        
                    </form>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection