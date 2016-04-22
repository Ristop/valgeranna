@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="bar">
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <h1>Rannabaar</h1>
                    <p>
                        Kaunil, otse rannaliival asetseval terrassil tekib peomeeleolu juba iseenesest. Sünnipäevad,
                        firmapeod, pulmad, see kõik on meie juures võimalik. Avarale terrassile mahutab 40-100
                        inimest.</p><p> Toitlustuse osas pakume menüüd Teie soovidest lähtuvalt.
                    </p>
                </div>
                <div class="col-xs-12 col-md-3">
                    <img src={{URL::asset('/img/bar/6.jpg')}} alt="Rannabaar">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <img src={{URL::asset('/img/bar/test.jpg')}} alt="Rannabaar">
                </div>
                <div class="col-xs-12 col-md-9">
                    <h1>Menüü</h1>
                        Grupimenüü,
                        Kohvipauside menüü,
                        Peolaudade menüü,
                        Suupistete menüü,
                        Grillimenüü <br>
                        Kuumad joogid :
                        Kohv 1.80
                        Tee 1.50
                        Kakao 1.80
                </div>

            </div>



        </div>
    </div>
@stop