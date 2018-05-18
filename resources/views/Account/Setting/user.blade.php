@extends('layouts.master') 
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <ol class="breadcrumb">
        <li><a href="{{ url('return-view/dashboard') }}"><i class="fa fa-dashboard"> Dashboard </i>  </a></li>
        <li><a href="{{ url('#') }}"><i class="fa fa-users"> Users</i> </a></li>
    </ol>
    <br>
</section>
<section class="content">
    <div class="box box-purple">
        <div class="box-header with-border">
            <h5 class="box-title"> </h5>
            <!-- Button add to users -->
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Add</button>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            @include('layouts.sessionInfromation')
            <div class="table-responsive">
                <table id="data" class="table table-striped table no-margin">
                    <thead>
                        <tr class="success">
                            <th class="text-center"> ID </th>
                            <th class="text-center"> Name </th>
                            <th class="text-center"> Phone</th>
                            <th class="text-center"> Status</th>
                            <th class="text-center"> Email</th>
                            <th class="text-center"> Last Login </th>
                            <th class="text-center"> IP Address </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  Initialize Table ID counter -->
                        @php $id = 1; @endphp @foreach($users as $data)
                        <tr>
                            <td class="text-center"> {{$id ++}} </td>
                            <td class="text-center"> {{$data->name}}</td>
                            <td class="text-center"> {{$data->phone_number}} </td>
                            <td class="text-center"> @if($data->activated == 1){{"Active"}}
                                                     @else{{"Inactive"}}
                                                     @endif
                             </td>
                            <td class="text-center"> {{$data->email}}</td>
                            <td class="text-center"> {{$data->last_login_at}}</td>
                            <td class="text-center"> {{$data->last_login_ip}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</section>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ url('register') }}">
              {{ csrf_field() }} 
                            
              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="name" maxlength="50" class="form-control" placeholder="Your Name" required="required">
              </div> 
              <div class="input-group mb-3">
                <span class="input-group-addon">@</span>
                <input type="email" name="email" class="form-control" maxlength="50" placeholder="Email" required="required">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-phone"></i></span>
                <input type="number" name="phone" class="form-control" placeholder="Phone Numner" required="required">
              </div>

              <button type="submit" class="btn btn-block btn-warning">Add User </button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection