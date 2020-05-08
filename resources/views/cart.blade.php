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
@section('title','Cart')
@section('content')
    <div class="view intro-2" >
        <div class="full-bg-img">
            <div class="mask rgba-blue-light flex-center">
                <div class="container text-center white-text wow fadeInUp">

                <div class="container" style=" margin-top: 80px">
                    <div class="card" style="  width: 960px ; background:rgba(13,13,13,0.65);
        max-height: 630px;  color: white; border-radius: 8px; margin-left: 50px; padding: 30px;">

                    <table id="cart" class="table table-condensed" style="color: white!important;">
        <thead>
        <tr>
            <th style="width:50%">Name</th>
            <th style="width:10%">Genre</th>
            <th style="width:8%">Date</th>
            <th style="width:22%" class="text-center">Quantity</th>
            <th>Delete</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $movie)

                <tr>
                    <td data-th="Name">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $movie['image'] }}"  class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $movie['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Genre">{{ $movie['genre'] }}</td>

                    <td data-th="Date">{{ $movie['date'] }}</td>
                    <td data-th="Plan" class="text-center">{{ $movie['plan'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}" style="background-color: #aa66cc!important;"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>

        <tr>
            <td><a href="{{ url('/cartoon') }}" class="btn btn-warning" style="background: #10d3c9!important; border-radius: 9px;"><i class="fa fa-angle-left"></i>  Continue</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"></td>
        </tr>
        </tfoot>
    </table>
</div>

                </div></div></div></div></div>

    <script type="text/javascript">

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection
