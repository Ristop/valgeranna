<div id="wrapper">
    <div class="container" id="adminNavigation">
        <span class="menu-trigger">MENÜÜ</span>
        <div class="nav-menu">
            <ul>
                <li class="{{ Route::getCurrentRoute()->getPath()=='admin/newPost' ? 'active-link' : '' }}"><a
                            href="/admin/newPost">Uudised</a></li>
                <li class="{{ Route::getCurrentRoute()->getPath()=='admin/pictures' ? 'active-link' : '' }}"><a
                            href="#">Pildid</a>
                </li>
                <li class="{{ Route::getCurrentRoute()->getPath()=='admin/register' ? 'active-link' : '' }}"><a
                            href="{{ url('/admin/register')}}">Kasutajad</a></li>
                <li><a href="{{ url('/logout')}}">Logi välja</a></li>
            </ul>
        </div>
    </div>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                Administraator
            </li>
            <li class="{{ Route::getCurrentRoute()->getPath()=='admin/newPost' ? 'active-link' : '' }}"><a
                        href="/admin/newPost">Uudised</a></li>
            <li class="{{ Route::getCurrentRoute()->getPath()=='admin/pictures' ? 'active-link' : '' }}"><a href="#">Pildid</a>
            </li>
            <li class="{{ Route::getCurrentRoute()->getPath()=='admin/register' ? 'active-link' : '' }}"><a
                        href="{{ url('/admin/register')}}">Kasutajad</a></li>
            <li><a href="{{ url('/logout')}}">Logi välja</a></li>
        </ul>
    </div>
</div>
