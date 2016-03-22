<div class="container">
    <header>
        <nav>
            <span class="menu-trigger">MENÜÜ</span>
            <div class="nav-menu">
                <a href="/" id="header-logo"><img alt="Valgeranna" src={{URL::asset('img/logo.png')}}></a>
                <ul>
                    <li><a href="/rooms"> <?php echo trans('menu.rooms'); ?> </a></li>
                    <li><a href="/pictures"> <?php echo trans('menu.pictures'); ?> </a></li>
                    <li><a href="/reserve"> <?php echo trans('menu.reserve'); ?> </a></li>
                    <li><a href="/posts"> <?php echo trans('menu.posts'); ?> </a></li>
                    <li><a href="/contact"> <?php echo trans('menu.contact'); ?> </a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <li>
                                        <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
</div>