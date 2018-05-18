@extends('layouts.master') 
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <ol class="breadcrumb">
    <li><a href="{{ url('return-view/dashboard') }}"><i class="fa fa-dashboard"> Dashboard </i>  </a></li>
    <li><a href="{{ url('#') }}"><i class=""> Data records </i> </a></li>
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
                            <th class="text-center"> Produce Variety</th>
                            <th class="text-center"> Commodity Type</th>
                            <th class="text-center"> Unit</th>
                            <th class="text-center"> Volume in Kgs </th>
                            <th class="text-center"> Campaign Id</th>
                            <th class="text-center"> Values in Ksh</th>
                            <th class="text-center"> Date</th>
                            <th class="text-center"> Object ID</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!--  Initialize Table ID counter -->
                          @php $id = 1; @endphp
                          @foreach($allData as $data)
                          <tr>
                            <td class="text-center"> {{$id ++}} </td>
                            <td class="text-center"> {{$data->Produce_Variety}} </td>
                            <td class="text-center"> {{$data->Commodity_Type}}</td>
                            <td class="text-center"> {{$data->Unit}}</td>
                            <td class="text-center"> {{$data->Volume_in_Kgs}} </td>
                            <td class="text-center"> {{$data->Values_in_Ksh}}</td>
                            <td class="text-center"> {{$data->Date}}</td>
                            <td class="text-center"> {{$data->OBJECTID}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
  </div>
</section>
@endsection