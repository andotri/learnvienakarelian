@extends('layouts.landing')

@section('title', 'Register')

@section('content')
    <p>
        We provide the dialect and cultural learning of Viena Karelian.
        Learn from the easiest level with interesting topics,
        also explore cultural information every day for <b>FREE</b>.

        <br>Join our community now.
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
        <a class="small" href="privacy-and-policy">Privacy and Policy</a>
    </div>
@endsection

@push('scripts')
    <script src="js/welcome.js"></script>
@endpush
