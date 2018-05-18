@extends('layouts.master') 
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <ol class="breadcrumb">
    <li><a href="{{ url('return-view/dashboard') }}"><i class="fa fa-dashboard"> Dashboard </i>  </a></li>
    <li><a href="{{ url('#') }}"><i class="">  Sms records </i> </a></li>
  </ol>
  <br>
</section>
<!-- Main content -->
<section class="content">
  <div class="box box-purple">
    <div class="box-header with-border">
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
                    <div class="table-responsive">
                      <table id="data" class="table table-striped table no-margin">
                        <thead>
                          <tr class="success">
                            <th class="text-center"> ID </th>
                            <th class="text-center"> Phone Number</th>
                            <th class="text-center"> Message</th>
                            <th class="text-center"> Transaction Time</th>
                            <th class="text-center"> Source Address </th>
                            <th class="text-center"> Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!--  Initialize Table ID counter -->
                          @php $id = 1; @endphp
                          @foreach($sent_sms as $data)
                          <tr>
                            <td class="text-center"> {{$id ++}} </td>
                            <td class="text-center"> {{$data->dst_address}} </td>
                            <td class="text-center"> {{$data->message}}</td>
                            <td class="text-center"> {{$data->updated_at}}</td>
                            <td class="text-center"> {{$data->src_address}} </td>
                            <td class="text-center"> {{$data->response_desc}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
  </div>
</section>
@endsection