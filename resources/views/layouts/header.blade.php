<div>
    <div class="container">
        <header>
            <nav>
                <div class="dropdown flag">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/img/flags/{{ \App::getLocale() }}_flag.png" alt="flag">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-position">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}">
                                        <img src="/img/flags/{{ $lang }}_flag.png" alt="flag"> {{$language}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <span class="menu-trigger">MENÜÜ</span>
                <div class="nav-menu">
                    <a href="/" id="header-logo"><img alt="Valgeranna" src={{URL::asset('img/logo.png')}}></a>
                    <ul>
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
                </div>
            </nav>
        </header>
    </div>
</div>