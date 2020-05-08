<style>
    .form input{
        background-color: #424242 !important;
        border-color: #424242!important;;
        border-radius: 5px!important;;
        height: 40px!important;;
        width: 0px!important;;
        margin-left: 20px!important;
        background-color: #10d3c9!important;
        border-radius: 9px;

    }
</style>
@extends('layouts.app')
@section('content')
    <div class="view intro-2" >
        <div class="full-bg-img">
            <div class="mask rgba-blue-light flex-center">
                <div class="container text-center white-text wow fadeInUp">
                <div class="container">
                        <div class="col-md-8">
                            <div class="card" style=" margin: 90px 0 20px 120px ; width: 760px ; background:rgba(13,13,13,0.65);
        height: 630px;  color: white; border-radius: 8px; padding: 90px 0 0 120px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; ">
                <h2>{{ $user->name }}'s Profile</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar" value="Upload file" style="margin-left:15px;background-color: #10d3c9!important;
                            border-radius: 9px; ">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" style="background-color: #10d3c9!important;
                            border-radius: 9px; "><br><br>
                    <input type="submit" value="Submit" class="pull-right btn btn-sm btn-primary" style="background-color: #10d3c9!important;
                            border-radius: 9px; " >

                </form><hr style="background-color: white!important;">
                <div>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                    {{ csrf_field() }}

                    <div class="form-group-row{{ $errors->has('current-password') ? ' has-error' : '' }}">
                        <div class="form-group row">
                            <label for="new-password" class="col-md-4 col-form-label text-md-right">Current Password</label>
                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div></div>
                    </div>

                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                        <div class="form-group row">
                            <label for="new-password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div></div>
                    </div>

                    <div class="form-group">
                        <div class="form-group row">
                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div></div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="background-color: #10d3c9!important;
                        border-radius: 9px; margin-left: 90px;"  >
                            Change Password
                        </button>

                    </div>
                </form>
            </div>
        </div>
            </div>

        </div>

                            </div></div></div></div></div></div></div></div>
@endsection

