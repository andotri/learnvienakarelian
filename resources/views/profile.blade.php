@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">@lang('default.myProfile')</h6>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            <b>@lang('default.success')</b>
                        </div>
                    @endif
                    <form class="user" method="POST" action="{{ URL::to('/') }}/profile/update">
                        @csrf
                        <div class="form-group">
                            <select class="form-control" id="language" name="language" required>
                                <option value="en" {{ Auth::user()->language === 'en' ? 'selected' : '' }}>@lang('default.iSpeakEnglish')</option>
                                <option value="fi" {{ Auth::user()->language === 'fi' ? 'selected' : '' }}>@lang('default.iSpeakFinnish')</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="@lang('default.namePlaceholder')" required value="{{ Auth::user()->name === 'Anonymous' ? '' : Auth::user()->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="anonymous" onchange="toggleName()" {{ Auth::user()->name === 'Anonymous' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheck">@lang('default.playAsAnAnonymous')</label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-user btn-block" value="@lang('default.update')">
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="btn btn-danger" href="{{ URL::to('/') }}/profile/delete" onclick="return confirm('@lang('default.deleteConfirmation')')">@lang('default.deleteMyAccount')</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('page-scripts')
    <script src="js/welcome.js"></script>
@endpush
