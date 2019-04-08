@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Reading - Easy')

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
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>Select the correct sentence of <code>{{ $word }}</code></p>
                    <div class="form-group">
                        @foreach($sentences as $sentence)
                            <label>
                                <input type="radio" name="option" id="{{ $sentence[0] }}" value="{{ $sentence[1] }}"> {{ $sentence[1] }}
                            </label><br>
                        @endforeach
                    </div>
                    <div class="form-group">
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Check" onclick="checkAnswer()">
                </div>
            </div>

        </div>

    </div>

    <script>
        function checkAnswer() {
            var answer = '{{ $learningObjective->english }}';
            if($("input[name=option]:checked").val() == answer) {
                alert("Correct");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=reading&answer=true";
            }
            else {
                alert("Wrong");
                window.location.href = "{{ URL::to('/') }}/answer?id={{ $userLearnedObjective->id }}&type=reading&answer=false";
            }
        }
    </script>

@endsection
