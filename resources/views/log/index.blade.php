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
                            <?php 
                               $x = 1; 
                                ?>
                            @foreach($logs as $l)
                            <tr>
                                <td>{{ $x++ }}</td>
                                <td>{{ $l->username }}</td>
                                <td>{{ $l->ip_address }}</td>
                                <td>{{ $l->action }}</td>
                                <td>{{ $l->log }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection