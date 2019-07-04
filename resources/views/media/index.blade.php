@extends('admin-ui.layout')
@section('page-title')
    Media
@stop
@section('page-header')
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Media Library</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('home.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Media</span>
                </div>
            </div>
        </div>
    </div>
@stop
@section('page-content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Media Library</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <div class="embed-responsive embed-responsive-1by1">
            <iframe class="embed-responsive-item" src="file-manager"></iframe>
        </div>
    </div>
@stop
@push('page-js')
@endpush
@push('page-css')
@endpush
