@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Reading')

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
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p>@lang('default.selectSentence'): <code><b>{{ $word }}</b></code></p>
                    <div class="form-group">
                        @foreach($sentences as $sentence)
                            <label>
                                <input type="radio" name="option" value="{{ $sentence[0] }}"> {{ $sentence[1] }}
                            </label><br>
                        @endforeach
                    </div>
                    <div class="form-group">
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="@lang('default.check')" onclick="checkAnswer()">
                </div>
            </div>

        </div>

    </div>

    <script>
        function checkAnswer() {
            var answer = '{{ $learningObjective->id }}';
            if($("input[name=option]:checked").val() == answer) {
                alert("@lang('default.correct')");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=reading&answer=true";
            }
            else {
                alert("@lang('default.wrong')");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=reading&answer=false";
            }
        }
    </script>

@endsection
