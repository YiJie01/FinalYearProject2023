@extends('AdminHome')
@section('reserve')
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
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden">ID</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>No of Person </th>
                        <th>Date</th>
                        <th>Time</th>
                        <td>Action</td>
                    </tr> 
                  </thead>
                  <tbody>
                  @foreach($reserves as $booking)
                          <tr>
                            <td align="">
                              <a href="https://wa.me/6{{$booking->phone}}?text=Hi Mr/Mrs {{$booking->name}}! Thanks for Your Booking Our Restaurant and Your Request been Accepted!" class="btn btn-success" onClick="return confirm('Are you sure to accept?')"><em class="fa fa-check"></em></a>
                              <a href="https://wa.me/6{{$booking->phone}}?text=Hi Mr/Mrs {{$booking->name}}! Thanks for Your Booking Our Restaurant and Your Request been Rejected! Please choose another time or date!" class="btn btn-danger" onClick="return confirm('Are you sure to Reject?')"><em class="fa fa-close"></em></a>
                            </td>
                            <td class="hidden">{{$booking->id}}</td>
                            <td>{{$booking->name}}</td>
                            <td>{{$booking->phone}}</td>
                            <td>{{$booking->email}}</td>
                            <td>{{$booking->noperson}}</td>
                            <td>{{$booking->date}}</td>
                            <td>{{$booking->time}}</td>
                            <td>
                            <a href="{{route('deleteBooking',['id'=>$booking->id])}}" class="btn btn-danger" onClick="return confirm('Are you sure to Delete?')"><em class="fa fa-trash"></em></a>
                            </td>
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

                      
                    </ul>

                  </div>
                </div>
              </div>
            </div>

</div></div></div>
		
@endsection