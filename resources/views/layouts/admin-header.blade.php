<div class="container">
    <header>
        <nav>
            <span class="menu-trigger">MENU</span>
            <div class="nav-menu">
                <a href="/admin" id="header-logo"><img alt="Valgeranna" src={{URL::asset('img/logo.png')}}></a>
                <ul>
                    <li><a href="/admin/newPost">UUDISEID</a></li>
                    <li><a href="#">PILDID</a></li>
                    <li><a href="{{ url('/admin/register')}}">KASUTAJAD</a></li>
                    <li><a href="{{ url('/logout')}}">LOGI VÄLJA</a></li>
                </ul>
            </div>
        </nav>
    </header>
</div>

