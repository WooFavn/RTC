@extends('layouts.app')

@section('content')
    <div>
        <h1>Hello, {{ $profile['name'] }}!</h1>
        <video id="room" width="480" height="360" autoplay></video>
        <p>Your status is : {{ $profile['status'] }}.</p>
        <?php if($profile['status'] == 'Waiting') {
            echo '<p>Для активации: <a href="/approve/docs">подтвердите Вашу личность.</a></p><hr>';
        } ?>
    </div>

@endsection