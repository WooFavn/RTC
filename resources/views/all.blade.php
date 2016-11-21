@extends('layouts.app')
@include('sort')

 @section('content')
    @foreach ($list as $performer)
        <div class="performer_item col-lg-2">
            <p>Performer name: {{ $performer->name }}</p>
            <p>Performer age: {{ $performer->age }}</p>
            <p>Performer status: {{ $performer->status }}</p>
        </div>
    @endforeach
 @endsection
