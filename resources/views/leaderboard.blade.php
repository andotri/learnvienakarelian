@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Leaderboard')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-12 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">@lang('default.leaderboard')</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">@lang('default.name')</th>
                            <th scope="col">@lang('default.weeklyScore')</th>
                            <th scope="col">@lang('default.totalScore')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ isset($_GET['page']) ? $loop->iteration + ($_GET['page'] - 1) * 10 : $loop->iteration}}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->weekly_score }}</td>
                                <td>{{ $user->lifetime_score }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>

        </div>

    </div>
@endsection