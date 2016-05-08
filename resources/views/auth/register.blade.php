@extends('layouts.layout-admin')

@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!--Display users table-->
                @if(!empty($users))
                    <div class="col-md-12">
                        <h3>Kasutajad</h3>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <stong>Nimi</stong>
                                </th>
                                <th>
                                    <stong>Email</stong>
                                </th>
                                <th>
                                </th>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                                <tbody>
                                <tr>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    @if(!($user->isSuperAdmin))
                                        <th>
                                            <form class="" method="post"
                                                  action="/admin/register/user/delete">
                                                {{csrf_field()}}
                                                <button class="btn btn-xs btn-block btn-danger" value="{{$user->id}}"
                                                        type="submit" name="id">Eemalda
                                                </button>
                                            </form>
                                        </th>
                                    @endif
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    @endif

                            <!--Display Registration form-->
                    <div class="col-md-12">
                        <h3>Registreeri uus kasutaja</h3>
                        <form class="form-horizontal form-register" role="form" method="POST"
                              action="{{ url('/register') }}">

                            {!! csrf_field() !!}
                            <div class="{{ $errors->has('name') && !$errors->has('google') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" placeholder="Nimi" name="name"
                                       value="{{ old('name') }}">
                                @if ($errors->has('name') && !$errors->has('google'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name')  }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('email') && !$errors->has('google') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" placeholder="E-Maili Aadress" name="email"
                                       value="{{ old('email') }}">
                                @if ($errors->has('email') && !$errors->has('google'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" placeholder="Parool" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" placeholder="Korda parooli"
                                       name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 btn-group" role="group">
                                    <button type="submit" name="register" class="btn btn-success"><i class="fa fa-btn fa-user"></i>
                                        Registreeri
                                    </button>
                                    <a href="{{ route('social.redirect', ['provider' => 'google']) }}"
                                       class="btn btn-primary google" type="submit">Lisa Google kasutaja</a>
                                </div>
                            </div>
                            <div class="{{ $errors->has('google') ? ' has-error' : '' }}">
                                @if ($errors->has('google'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('google') }}</strong>
                                </span>
                                @endif
                            </div>
                        </form>

                    </div>
            </div>
        </div>
    </div>
@endsection