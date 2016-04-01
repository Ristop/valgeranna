@extends('layouts.layout-admin')

@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!--Display Registration form-->
                <div class="col-md-12">
                    <div class="panel panel-orange">
                        <div class="panel-heading">Registreeri uus kasutaja</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {!! csrf_field() !!}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Nimi</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">E-Maili Aadress</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email"
                                               value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Parool</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Korda parooli</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i> Registreeri
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <!--Display users table-->
            @if(!empty($users))
                <div class="col-md-12">
                    <div class="panel panel-orange">
                        <div class="panel-heading">Administraatorid</div>
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>
                                    <stong>Nimi</stong>
                                </th>
                                <th>
                                    <stong>Email</stong>
                                </th>
                                <th>
                                    <stong>Loodud</stong>
                                </th>
                                <th>
                                    <stong></stong>
                                </th>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                                <tbody>
                                <tr>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th>{{$user->created_at}}</th>
                                    <th class="pull-right">
                                        <form class="col-sm-6 col-xs-6" method="post" action="/admin/user/delete">
                                            {{csrf_field()}}
                                            @if(!($user == $users[0]))
                                                <button class="btn btn-group-sm btn-danger" type="submit" name="id"
                                                        value={{$user->id}}>
                                                    Eemalda kasutaja
                                                </button>
                                            @endif
                                        </form>
                                    </th>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            @endif
        </div>
        </div>
    </div>
@endsection