@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
        </div>

        <form action="{{ route('password_action') }}" method="POST">
            @csrf
          <div class="modal-body mx-3">
            <div class="md-form">
                <input type="password" id="orangeForm-name" class="form-control validate" placeholder="Old Password" name="current_password" >
            </div>
            <br>
            <div class="md-form">
                <input type="password" id="orangeForm-name" class="form-control validate" placeholder="New Password" name="new_password">
            </div>
            <br>
            <div class="md-form">
                <input type="password" id="orangeForm-name" class="form-control validate" placeholder="New Password Confirmation" name="new_password_confirmation">
            </div>

        </div>
        <div class="modal-footer">
          <a href="/dashboard" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-success">Save changes</button>
        </div>
        </div>
          </form>
    </div>
@endsection