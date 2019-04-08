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
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>Select a picture that you hear</p>
                    <div class="form-group">
                        <audio class="center" controls>
                            <source src="{{ asset($learningObjective->voice) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        @foreach($images as $image)
                            <img class="pictureOption center" src="{{ asset($image[1]) }}" id="{{ $image[0] }}" onclick="changeOpacity({{ $image[0] }})">
                        @endforeach
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Check" onclick="checkAnswer()">
                    <input type="hidden" id="answer" value="">
                </div>
            </div>

        </div>

    </div>

    <script>
        function changeOpacity(id) {
            $('.pictureOption').css('opacity', '0.5');
            $('#' + id).css('opacity', '1');
            $('#answer').val(id);
        }

        function checkAnswer() {
            var answer = {{ $learningObjective->id }};
            if($('#answer').val() == answer) {
                alert("Correct");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=listening&answer=true";
            }
            else {
                alert("Wrong");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=listening&answer=false";
            }
        }
    </script>

@endsection
