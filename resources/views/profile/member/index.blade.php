@extends('layouts.app')

@section('content')
    <div class='main-profile-banner col-md-12'><img src=""></div>
    <div>
        <h1>Hello, {{ $profile['name'] }}!</h1>
        <p>Your status is : {{ $profile['status'] }}.</p>
        @if ($profile['status'] == 'Waiting'):
            <p>Для активации: <a href="/approve/card">привяжите картy.</a></p><hr>
        @endif
        <p>Your country: {{ $profile['country'] }} <button class="btn btn-success" value="change">change</button> </p>
    </div>
@endsection