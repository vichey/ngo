@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Staff List&nbsp;&nbsp;
                    <a href="{{url('/admin/staff/create')}}" class="btn btn-link btn-sm">New</a>
                </div>
                <div class="card-block">

                    <table class="table table-condensed table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Position</th>
                                <th>Section</th>
                                <th>Order</th>
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staffs as $s)
                                <tr>
                                    <td>{{$s->id}}</td>
                                    <td>{{$s->full_name}}</td>
                                    <td>{{$s->position}}</td>
                                    <td>{{$s->section}}</td>
                                    <td>{{$s->order_number}}</td>
                                    <td>
                                        <img src="{{asset('uploads/staff/'.$s->photo)}}" alt="" width="27">    
                                    </td>
                                    <td>
                                        <a href="{{url('/admin/staff/edit/'.$s->id)}}" title="Edit"><i class="fa fa-edit text-success"></i></a>
                                        &nbsp;&nbsp;
                                        <a href="{{url('/admin/staff/delete/'.$s->id)}}" onclick="return confirm('You want to delete?')" title="Delete"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{$staffs->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection