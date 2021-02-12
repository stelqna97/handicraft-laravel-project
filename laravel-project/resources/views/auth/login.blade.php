@extends('layouts.app2')

@section('style')
<style>
#login{
    width:750px;
    max-height:500px;
    position:relative;
    top:-180px;
}
html, body {
  height: 100%;
}

</style>

@endsection

@section('content')
<div class="container" id="login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" id="log-header">{{ __('Вход в системата') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Електронна поща') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Парола') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

            

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Вход') }}
                                </button>
<br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" id="forg"  href="{{ route('password.request') }}">
                                        {{ __('Забравена парола?') }}
                                    </a>
                                @endif
                                <br>
                                <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Създай свой профил') }}
                                    </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
