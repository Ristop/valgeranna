<div class="container">
    <header>
        <nav>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> <?php echo trans('menu.lang'); ?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                    </li>
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <li>
                                <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <span class="menu-trigger">MENÜÜ</span>
            <div class="nav-menu">
                <a href="/" id="header-logo"><img alt="Valgeranna" src={{URL::asset('img/logo.png')}}></a>
                <ul>
                    <li><a href="/rooms"> <?php echo trans('menu.rooms'); ?> </a></li>
                    <li><a href="/pictures"> <?php echo trans('menu.pictures'); ?> </a></li>
                    <li><a href="/reserve"> <?php echo trans('menu.reserve'); ?> </a></li>
                    <li><a href="/posts"> <?php echo trans('menu.posts'); ?> </a></li>
                    <li><a href="/contact"> <?php echo trans('menu.contact'); ?> </a></li>
                </ul>
            </div>
        </nav>
    </header>
</div>