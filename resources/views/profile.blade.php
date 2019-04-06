@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-6 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            <strong>Success!</strong>
                            <br>Thanks for your update.
                        </div>
                    @endif
                    <form class="user" method="POST" action="profile/update">
                        @csrf
                        <div class="form-group">
                            <select class="form-control" id="language" name="language" required>
                                <option value="en" {{ Auth::user()->language === 'en' ? 'selected' : '' }}>I speak English</option>
                                <option value="fi" {{ Auth::user()->language === 'fi' ? 'selected' : '' }}>I speak Finnish</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="My name is ..." required value="{{ Auth::user()->name === 'Anonymous' ? '' : Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="anonymous" onchange="toggleName()" {{ Auth::user()->name === 'Anonymous' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheck">Play as an anonymous</label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Update">
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="btn btn-danger" href="{{ URL::to('/') }}/profile/delete" onclick="return confirm('Are you sure to delete your account?')">Delete my account</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('page-scripts')
    <script src="js/welcome.js"></script>
@endpush
