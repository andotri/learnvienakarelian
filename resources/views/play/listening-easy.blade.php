@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Listening - Easy')

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
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">33%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 33%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p>@lang('default.selectPictureListening')</p>
                    <div class="form-group text-center">
                        <audio class="center" controls>
                            <source src="{{ asset($learningObjective->voice) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        @foreach($images as $image)
                            <img class="picture" src="{{ asset($image[1]) }}" id="{{ $image[0] }}" onclick="changeOpacity({{ $image[0] }})">
                        @endforeach
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="@lang('default.check')" onclick="checkAnswer()">
                    <input type="hidden" id="answer" value="">
                </div>
            </div>

        </div>

    </div>

    <script>
        function changeOpacity(id) {
            $('.picture').css('opacity', '0.5');
            $('#' + id).css('opacity', '1');
            $('#answer').val(id);
        }

        function checkAnswer() {
            var answer = {{ $learningObjective->id }};
            if($('#answer').val() == answer) {
                alert("@lang('default.correct')");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=listening&answer=true";
            }
            else {
                alert("@lang('default.wrong')");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=listening&answer=false";
            }
        }
    </script>

@endsection
