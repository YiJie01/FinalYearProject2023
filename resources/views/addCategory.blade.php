@extends('AdminHome')
<!---->
@section('AddCategoryPage')
<div style="text-align:center">
<form class="subform"  method="post" action="{{ route('addCategory') }}" enctype="multipart/form-data">
@csrf

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title" style="padding-right: 300px;">Add Category</h3>
                  </div>
                </div>
              </div>
              <br>
              @if(session()->has('message'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}

                </div>
              @endif
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <tbody>
                    </form >     
                        <!--Name-->
                        <p>
                            <label for="CategoryName" style="font-size:130%;">Category Name:</label>
                            <input type="text" name="name" id="name">
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