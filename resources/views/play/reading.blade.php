@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Play')

@section('content')
    <audio controls>
        <source src="{{ asset('voices/1.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
@endsection
