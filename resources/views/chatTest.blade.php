@extends('app')

@section('content')
    <p>这里是测试页面</p>
    <p>这里是测试页面</p>
    <p id="num">0</p>
@stop

@section('scripts')

    <script src="{{ asset('assets/js/socket.io.js') }}"></script>

    <script>
        var socket = io('http://localhost:3000');
        socket.on("test-channel:App\\Events\\ChatEvent", function(message){
            // increase the power everytime we load test route
            $('#num').text(parseInt($('#num').text()) + parseInt(message.data.userNum));
        });
    </script>


@stop