@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    {{ __('Login') }}</div>

                <div class="card-body">
                    <div class="form-group row mt-2">
                        <div class="col-md-8 offset-md-4">
                            <a href="{{ url('auth/twitter') }}">
                                <button type="button" class="btn btn-primary"><i class="fab fa-twitter"></i> Twitterアカウントでログインする</button>
                            </a>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-md-8 offset-md-4">
                            <a href="{{ url('auth/google') }}">
                                <button type="button" class="btn btn-primary"><i class="fab fa-google"></i> Googleアカウントでログインする</button>
                            </a>
                            {{-- <a href="/login/google" class="btn btn-secondary" role="button">
                                Google Login
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
