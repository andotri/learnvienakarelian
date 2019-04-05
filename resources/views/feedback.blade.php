@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-6 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Feedback</h6>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            <strong>Success!</strong>
                            <br>Thanks for your feedback.
                        </div>
                    @endif
                    <form class="user" method="POST" action="feedback/create">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required autofocus>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control rounded-0" id="description" name="description" rows="10" placeholder="Description" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit">
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
