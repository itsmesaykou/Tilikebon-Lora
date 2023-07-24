@extends('layouts.main')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>
    <section style="background-color: #f8f9fa;">
        <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3"></h5>
                <p class="text-muted mb-1">Full Stack Developer</p>
                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                </div>
            </div>
            
            </div>
            <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->name }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Username</p>
                    </div>
                    <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->username }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->phone }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->email }}</p>
                    </div>
                </div>
                <hr>
                </div>
            </div>
            
                
            </div>
            </div>
        </div>
        
        </div>

        

    


    

    <!-- Project Card Example -->

    
    

</div>
@endsection