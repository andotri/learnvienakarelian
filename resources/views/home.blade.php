@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="{{ URL::to('/') }}/leaderboard">Weekly Rank and Score</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $rank }} | {{ Auth::user()->weekly_score }} pts</div>
                        </div>
                        <div class="col mr-2 text-right">
                            <div class="fb-share-button" data-href="http://learnvienakarelian.tk" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flearnvienakarelian.tk%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="float: left">Select a Topic</h6>
                    <h6 class="m-0 font-weight-bold text-primary" style="float: right">Achievements</h6>
                </div>
                <div class="card-body">
                    <a href="{{ URL::to('/') }}/play/food_and_drink">
                        <p class="p-3 bg-gray-200 m-0">
                            <span class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-utensils"></i>
                            </span>
                            Food and Drink
                            <span style="float: right;">
                                {!! $stars[0] !!}
                            </span>
                        </p>
                    </a>
                    <a href="{{ URL::to('/') }}/play/clothing">
                        <p class="p-3 bg-gray-100 m-0">
                            <span class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-tshirt"></i>
                            </span>
                            Clothing
                            <span style="float: right;">
                                {!! $stars[1] !!}
                            </span>
                        </p>
                    </a>
                    <a href="{{ URL::to('/') }}/play/furniture">
                        <p class="p-3 bg-gray-200 m-0">
                            <span class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-chair"></i>
                            </span>
                            Furniture
                            <span style="float: right;">
                                {!! $stars[2] !!}
                            </span>
                        </p>
                    </a>
                    <a href="{{ URL::to('/') }}/play/season">
                        <p class="p-3 bg-gray-100 m-0">
                            <span class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-cloud-sun"></i>
                            </span>
                            Season
                            <span style="float: right;">
                                {!! $stars[3] !!}
                            </span>
                        </p>
                    </a>
                    <a href="{{ URL::to('/') }}/play/number">
                        <p class="p-3 bg-gray-200 m-0">
                            <span class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-list-ol"></i>
                            </span>
                            Number
                            <span style="float: right;">
                                {!! $stars[4] !!}
                            </span>
                        </p>
                    </a>
                    <a href="{{ URL::to('/') }}/play/body">
                        <p class="p-3 bg-gray-100 m-0">
                            <span class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-child"></i>
                            </span>
                            Body
                            <span style="float: right;">
                                {!! $stars[5] !!}
                            </span>
                        </p>
                    </a>
                    <a href="{{ URL::to('/') }}/play/days_and_months">
                        <p class="p-3 bg-gray-200 m-0">
                            <span class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            Days  and months
                            <span style="float: right;">
                                {!! $stars[6] !!}
                            </span>
                        </p>
                    </a>
                    <hr>
                    <a href="{{ URL::to('/') }}/cultural-information">
                        <p class="p-3 bg-gray-200 m-0">
                            <span class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-file-alt"></i>
                            </span>
                            Cultural Information
                        </p>
                    </a>
                </div>
            </div>

        </div>

    </div>
@endsection
