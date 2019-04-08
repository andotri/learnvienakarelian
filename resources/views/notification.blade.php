@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Notification')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-12 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Notification</h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-{{ $type }}" role="alert">
                        {{ $message }}
                    </div>
                    @isset($description)
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Do you know?</h6>
                        </div>
                        <div class="card-body">
                            <p>
                                {{ $description }}
                            </p>
                            <a href="{{ URL::to('/') }}" class="btn btn-success btn-user btn-block">
                                Completed the level
                            </a>
                        </div>
                    @endisset
                </div>
            </div>

        </div>

    </div>
@endsection
