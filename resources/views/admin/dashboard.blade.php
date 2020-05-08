@extends('layouts.app')
<style xmlns:font-size="http://www.w3.org/1999/xhtml" xmlns:font-size="http://www.w3.org/1999/xhtml">
    .forms input{
        background-color: #424242 !important;
        border-color: #424242!important;;
        border-radius: 5px!important;;
        height: 40px!important;;
        width: 360px!important;;
        margin-left: 20px!important;;
    .btn:hover{
        font-size: 30px;
        color: #10d3c9 !important;
    }

</style>
@section('content')
    <div class="view intro-2" >
        <div class="full-bg-img">
            <div class="mask rgba-purple-light flex-center">
                <div class="container text-center white-text wow fadeInUp">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card" style=" padding-top: 30px ; width: 660px ; background:rgba(13,13,13,0.65);
        height: 350px;  color: white; border-radius: 8px;">
                                    <div class="card-header"><h3> Settings</h3></div>
                                    <a class="btn" href="{{url('/create')}}" style="color: white;font-size: 18px;">Add New Film</a>
                                    <hr>
                                    <a class="btn" href="{{url('/table')}}" style="color: white;font-size: 18px;">Show Movies</a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div></div></div></div></div>
@endsection
