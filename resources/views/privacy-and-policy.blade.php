@extends('layouts.landing')

@section('title', 'Privacy and Policy')

@section('content')
    <p>
        @lang('privacy-and-policy.description')
    </p>
    <hr>
    <form class="user" method="GET" action="/">
        <input type="submit" class="btn btn-info btn-user btn-block" value="Back">
    </form>
    <hr>
@endsection

@push('scripts')
    <script src="js/welcome.js"></script>
@endpush
