@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Writing')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-12 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $topic_name }}</h6>
                </div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">66%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p>@lang('default.writeTranslation'): <code><b>{{ $learningObjective->viena_karelian }}</b></code></p>
                    <div class="form-group">
                        <input type="text" class="form-control" id="writing" placeholder="@lang('default.translation')" required autofocus>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="@lang('default.check')" onclick="checkAnswer()">
                </div>
            </div>

        </div>

    </div>

    <script>
        function checkAnswer() {
            @if(Session::get('locale') === 'en')
                var answer = "{!! $learningObjective->english !!}";
            @else
                var answer = "{!! $learningObjective->finnish !!}";
            @endif
            if($('#writing').val().toUpperCase().trim() == answer.toUpperCase().trim()) {
                alert("@lang('default.correct')");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=writing&answer=true";
            }
            else {
                alert("@lang('default.wrong')");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=writing&answer=false";
            }
        }
    </script>

@endsection
