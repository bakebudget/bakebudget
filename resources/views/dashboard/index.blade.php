@extends('layout.layout')
@section('content')
<div class="row">
    <div class="list-group list-group-horizontal">
        <div class="list-item flex-fill">
            <h3>Dashboard</h3>
        </div>
        <div class="list-item flex-fill">
            <div class="input-group col-md-4" style="max-width: 300px; border-right: none;">
                <input  class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
                <span class="input-group-append">
                    <div style="border-left: none;" class="input-group-text py-2 border-left-0 bg-transparent"><i class="bi-search"></i></div>
                </span>
            </div>
        </div>
        <div class="list-item flex-fill">
            <p>Hello, User</p>
        </div>
    </div>
</div>
@endsection