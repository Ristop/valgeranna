<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="col-sm-12 text-center footer-text">
            <ul class="list-inline">
                <li class="{{ Route::getCurrentRoute()->getPath()=='/' ? 'active-link' : '' }} home-link"><a
                            href="/"> <?php echo trans('menu.home'); ?> </a></li>
                <li class="{{ Route::getCurrentRoute()->getPath()=='rooms' ? 'active-link' : '' }}"><a
                            href="/rooms"> <?php echo trans('menu.rooms'); ?> </a></li>
                <li class="{{ Route::getCurrentRoute()->getPath()=='pictures' ? 'active-link' : '' }}"><a
                            href="/pictures"> <?php echo trans('menu.pictures'); ?> </a></li>
                <li class="{{ Route::getCurrentRoute()->getPath()=='bar' ? 'active-link' : '' }}"><a
                            href="/bar"> <?php echo trans('menu.bar'); ?> </a></li>
                <li class="{{ Route::getCurrentRoute()->getPath()=='beach' ? 'active-link' : '' }}"><a
                            href="/beach"> <?php echo trans('menu.beach'); ?> </a></li>
                <li class="{{ Route::getCurrentRoute()->getPath()=='pastime' ? 'active-link' : '' }}"><a
                            href="/pastime"> <?php echo trans('menu.pastime'); ?> </a></li>
                <li class="{{ Route::getCurrentRoute()->getPath()=='posts' ? 'active-link' : '' }}"><a
                            href="/posts"> <?php echo trans('menu.posts'); ?> </a></li>
                <li class="{{ Route::getCurrentRoute()->getPath()=='contact' ? 'active-link' : '' }}"><a
                            href="/contact"> <?php echo trans('menu.contact'); ?> </a></li>
            </ul>
            <br>
            Valgeranna Puhkekeskus  |  +372 5770 5006
        </div>
    </div>
</div>
