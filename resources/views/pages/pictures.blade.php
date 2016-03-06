@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <?php
            $dir = 'img/gallery'; //pictures location
            $file_display = array('jpg', 'jpeg', 'png', 'gif'); //what kind of pic formats we accept
            if (file_exists($dir) == false) :
                echo 'Directory \'', $dir, '\' not found!'; //if directory doesn't exist, display error
            else :
            $dir_contents = scandir($dir); //get pics as an array
            foreach ($dir_contents as $file):
            $explode = explode('.', $file); //explode breaks a string into an array
            $end = end($explode); //end gives last element of an array
            $file_type = strtolower($end);
            if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true):?>
<!--            Setting up thumbnail format:       -->
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