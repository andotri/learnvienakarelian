@extends('layouts.landing')

@section('title', 'Privacy and Policy')

@section('content')
    <p>
        Under the General Data Protection Regulation (GDPR),
        you have the right to access, rectify, port and erase your data.
        Learn more about these rights, and find out how you can update your data on the "My Profile" section.
        You also have the right to object to and restrict certain processing of your data.
        <br><br>This includes:
        <br>- Play as an anonymous
        <br>- Delete your account
        <br>- Contact us with a feedback form
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
