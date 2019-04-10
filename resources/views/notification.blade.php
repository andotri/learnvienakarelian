@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Notification')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-12 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">@lang('default.notification')</h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-{{ $type }}" role="alert">
                        {{ $message }}
                    </div>
                    @isset($description)
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">100%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card-header py-3 w-50 text-center" style="margin: 0 auto;">
                            <h6 class="m-0 font-weight-bold text-primary">@lang('default.doYouKnow?')</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset($picture) }}" id="logo">
                                <br><br>
                                {{ $description }}
                            </div>
                        </div>
                        <a href="{{ URL::to('/') }}" class="btn btn-success btn-user btn-block">
                            @lang('default.completedTheLevel')
                        </a>
                    @endisset
                </div>
            </div>

        </div>

    </div>
@endsection
