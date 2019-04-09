@extends('layouts.master')
@extends('layouts.welcome')

@section('title', 'Register')

@section('content')
    <p>
        Play and learn Viena Karelian and culture.
        You can start from the easiest level with basic topics and learn cultural information daily for <b>FREE</b>.
    </p>
    <hr>
    <form class="user" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <select class="form-control" id="language" name="language" required>
                <option value="en">I speak English</option>
                <option value="fi">I speak Finnish</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="My name is ..." required>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="anonymous" onchange="toggleName()">
                <label class="custom-control-label" for="customCheck">Play as an anonymous</label>
            </div>
        </div>
        <input type="submit" class="btn btn-primary btn-user btn-block" value="Get Started">
    </form>
    <hr>
    <div class="text-center">
        <a class="small" href="{{ URL::to('/') }}/privacy-and-policy">Privacy and Policy</a>
    </div>
@endsection

@push('page-scripts')
    <script src="{{ asset('js/welcome.js') }}"></script>
@endpush
