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
                            <a href="{{ url('https://api.instagram.com/oauth/authorize?client_id=342345636901092&redirect_uri=https%3A%2F%2Flocalhost%2F&scope=user_profile,user_media&response_type=code') }}">
                                <button type="button" class="btn btn-primary"><i class="fab fa-instagram"></i> Instagram</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
