@extends('layouts.admin')

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Gate Pass</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Gatepass No</th>
                    <th>Employee ID</th>
                    <th>Destination</th>
                    <th>Date & Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($gatepasses as $gatepass)
                <tr>
                    <td>{{$gatepass->id}}</td>
                    <td>{{$gatepass->gatepassNo}}</td>
                    <td>{{$gatepass->employeeId}}</td>
                    <td>{{$gatepass->destination}}</td>
                    <td>{{$gatepass->created_at}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                        <a href="{{url('/generategatepass',$gatepass->id)}}" class="btn btn-sm btn-success">Generate Gatepass</a>
                    </td>
                </tr>
                @endforeach





                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Gatepass No</th>
                    <th>Date & Time</th>
                    <th>Employee ID</th>
                    <th>Destination</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
