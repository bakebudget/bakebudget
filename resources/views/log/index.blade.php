@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3>Log Activity</h3>
                </div>
                <div class="card-body">
                    <table class="table  table-bordered DataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Ip Address</th>
                                <th>Action</th>
                                <th>Log</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Data1</td>
                                <td>Data2</td>
                                <td>Data3</td>
                                <td>Data4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection