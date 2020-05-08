@extends('layouts.app')
@section('title','Add new movie')
<style>
    body{
        background: url("https://dkr0pu7ej5xex.cloudfront.net/wp-content/uploads/2017/04/24135159/Netflix-Background.jpg")no-repeat center center;
        background-size: cover;
    }

    .btnSubmit
    {
        border:none;
        border-radius:9px;
        padding: 1%;
        width: 20%;
        cursor: pointer;
        background: #10d3c9;
        color: #fff;
    }

</style>

@section('content')
    <body>
    <div class="view intro-2" >
        <div class="full-bg-img">
            <div class="mask rgba-blue-light flex-center">
                <div class="container text-center white-text wow fadeInUp">
                    <div class="container text-center white-text wow fadeInUp">
                        <div class="container">
                        <div class="col-md-8">
                            <div class="card" style="  width: 860px ; background:rgba(13,13,13,0.65);
        height: 400px; padding: 30px; color: white; border-radius: 8px;margin-left: 100px; ">
                                <div class="container register-form" >

            <div class="card-header">
                <p>Add new movie.</p>
            </div><hr>

            <div class="form-content">
                <form action="{{route('store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Film Name " name="name"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Film Genre " name="genre">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Date of premiere " name="date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Image Link" name="image">
                            </div>
                            <div class="form-group">
                                <select id="inputState" class="form-control" name="plan">
                                    <option selected>Choose quantity</option>

                                    <option value="4K"> 4K</option>
                                    <option value="Full HD"> Full HD</option>
                                    <option value="HD"> HD</option>
                                    <option value="SD"> SD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="inputState" class="form-control" name="type">
                                    <option selected>Type movie</option>
                                    <option value="film"> Film</option>
                                    <option value="serial"> Serial</option>
                                    <option value="cartoon"> Cartoon</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit">Submit</button>
                </form>
            </div>
        </div>
                                </div></div></div></div></div></div></div></div>
    </body>

@endsection
