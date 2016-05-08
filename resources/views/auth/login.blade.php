@extends('layouts.login-page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <form class="form-horizontal form-signin" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <h2 class="form-signin-heading">Palun logi sisse</h2>
                    <div class="{{ $errors->has('email') && !$errors->has('google') ? ' has-error' : '' }}">
                        <label class="sr-only">E-Maili Address</label>

                        <input type="email" class="form-control" name="email" placeholder="Email"
                               value="{{ old('email') }}">

                        @if ($errors->has('email') && !$errors->has('google'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="sr-only">Parool</label>
                        <input type="password" class="form-control" placeholder="Parool" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Jäta mind meelde
                        </label>
                    </div>

                    <button type="submit" name="Logi sisse" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i> Logi sisse
                    </button>

                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Unustasid parooli?</a>
                    <p class="or-social">Või logi sisse google kasutajaga</p>
                    <a href="{{ route('social.redirect', ['provider' => 'google']) }}"
                       class="btn btn-lg btn-primary btn-block google" type="submit">Google</a>
                    <div class="{{ $errors->has('google') ? ' has-error' : '' }}">
                        @if ($errors->has('google'))
                            <span class="help-block">
                                <strong>{{ $errors->first('google') }}</strong>
                            </span>
                        @endif
                    </div>
                </form>

            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
@endsection