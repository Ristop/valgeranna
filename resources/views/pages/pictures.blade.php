@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <?php
            $dir = 'img/gallery';
            $file_display = array('jpg', 'jpeg', 'png', 'gif');
            if (file_exists($dir) == false) :
                echo 'Directory \'', $dir, '\' not found!';
            else :
            $dir_contents = scandir($dir);
            foreach ($dir_contents as $file):
            $explode = explode('.', $file);
            $end = end($explode);
            $file_type = strtolower($end);
            if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true):?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href=<?php echo "$dir/$file"?>>
                    <img class="img-responsive" src=<?php echo "$dir/$file"?> alt=<?php echo"$file"?>>
                </a>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <hr>

    </div>
@stop