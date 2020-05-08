<style>
 table, th,td{
     font-size: 18px!important;
 }
</style>
@extends('layouts.app')
@section('content')
    <div class="view intro-2" >
        <div class="full-bg-img">
            <div class="mask rgba-blue-light flex-center">
                <div class="container text-center white-text wow fadeInUp">
                <div class="container" >
        <div class="row justify-content-center">
                <div style=" text-align: center; width: 760px ; background:rgba(13,13,13,0.65);
        height: 550px; border-radius: 8px; padding: 30px; ">

                <table class="table table-striped" style="color: white; ">
                    <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="{{ route('post.show', $post->id) }}"  style="color: #10d3c9!important;
                             text-align: center; font-size: 18px;">Show Post</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{$posts->links()}}
            </div>
        </div>
                </div></div></div></div></div></div>
@endsection
