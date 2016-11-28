@extends('layouts.app')

@section('content')

    <h1>Welcome to {{ $performer['name'] }}`s room!</h1>
    <?php if(Auth::id() !== $performer['id']): ?>
        <video id="performer_video" width="480" height="360" autoplay></video>
    <?php endif; ?>

@endsection