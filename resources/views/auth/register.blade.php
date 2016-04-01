@extends('layouts.layout-admin')

@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!--Display users table-->
                @if(!empty($users))
                    <div class="col-md-12">
                        <h3>Kasutajad</h3>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    <stong>Nimi</stong>
                                </th>
                                <th>
                                    <stong>Email</stong>
                                </th>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                                <tbody>
                                <tr>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>


                                        @if(!($user == $users[0]))
                                        <th>
                                            <form class="col-sm-6 col-xs-6" method="post"
                                                  action="/admin/register/user/delete">
                                                {{csrf_field()}}
                                                <button class="btn btn-xs  btn-danger" value="{{$user->id}}" type="submit" name="id">Eemalda</button>
                                            </form>
                                        </th>
                                        @else

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
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/register') }}">

                            {!! csrf_field() !!}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Nimi" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-8">
                                    <input type="email" class="form-control" placeholder="E-Maili Aadress" name="email"
                                           value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-8">
                                    <input type="password" class="form-control" placeholder="Parool" name="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <div class="col-md-8">
                                    <input type="password" class="form-control" placeholder="Korda parooli"  name="password_confirmation">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Registreeri
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
            </div>
        </div>
    </div>
@endsection