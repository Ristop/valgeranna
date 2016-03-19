<div class="container">
    <header>
        <nav>
            <span class="menu-trigger">MENÜÜ</span>
            <div class="nav-menu">
                <a href="/" id="header-logo"><img alt="Valgeranna" src={{URL::asset('img/logo.jpg')}}></a>
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