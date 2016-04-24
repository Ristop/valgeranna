@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="beach">
            <div class="row">

                <div class="col-xs-12 col-md-12">
                    <div class="beach-heading">
                        <h1>Valgerand</h1>
                    </div>
                    <img src={{URL::asset('/img/main/1.jpg')}} alt="Rand">
                </div>

                <div class="col-xs-12 col-md-12">
                    <div class="beach-content">
                        <p>
                            Valgerand on  kuulus oma valge liiva poolest ja on populaarne igas vanuses rahva hulgas. Pikk ja lai
                            liivarand on lemmik suvel puhkepiirkonnas hulgale kohalikele ja samuti külastajate jaoks. 
                        </p>
                        <p>
                            Valgeranna madal vesi on eriti mõnus suurtele peredele  ja on soojem kui mujal Eesti rannikul.
                        </p>
                        <p>
                            Rannas on ka palliplats,
                            <a href="/bar">rannabaar</a> ja restoran!
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
@stop