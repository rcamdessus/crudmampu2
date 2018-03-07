@extends('layouts.master')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Post
                        <span class="float-right">
                            <a href="#" class="btn btn-sm btn-primary">Create New Post</a>
                        </span>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Last Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>ContohID</td>
                                <td>Contoh Title</td>
                                <td>Contoh Tarikh</td>
                                <td>Contoh Tarikh</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="#">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
