<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
    @foreach($news as $newNews)
        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    {{$newNews->title}}
                </div>
                <div class="panel-body">
                    {{$newNews->content}}
                </div>
                <div class="panel-footer">Kuupäev:{{$newNews->date}};?></div>
            </div>
        </div>
    @endforeach
    </body>
</html>
