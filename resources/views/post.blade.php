<style>
    .card{
        color: #424242;
        text-align: left;
       }
</style>
@extends('layouts.app')

@section('content')
    <div class="view intro-2" >
        <div class="full-bg-img">
            <div class="mask rgba-blue-light flex-center">
                <div class="container text-center white-text wow fadeInUp">
                    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('post.store') }}">
                            <div class="form-group">
                                @csrf
                                <label class="label">Post Title: </label>
                                <input type="text" name="title" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Post Body: </label>
                                <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Submit" style="background-color: #10d3c9!important;
                                       border-radius: 9px; ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

                    </div></div></div></div></div>
@endsection
