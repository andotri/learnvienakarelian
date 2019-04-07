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
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>Write the translation of <code>{{ $learningObjective->viena_karelian }}</code></p>
                    <div class="form-group">
                        <input type="text" class="form-control" id="writing" placeholder="Translation" required autofocus>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Check" onclick="checkAnswer()">
                </div>
            </div>

        </div>

    </div>

    <script>
        function checkAnswer() {
            var answer = '{{ $learningObjective->english }}';
            if($('#writing').val() == answer) {
                alert("Correct");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=writing&answer=true";
            }
            else {
                alert("Wrong");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=writing&answer=false";
            }
        }
    </script>

@endsection
