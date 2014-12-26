
<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Learning Laravel</a>
            <ul id="nav-mobile" class="right side-nav">
                @if(Auth::check())
                    <li><a href="/users">Users</a></li>
                    <li class="active"><a href="/logout">Sign Out</a></li>
                @else
                    <li><a href="/login">Sign In</a></li>
                @endif
            </ul>
            <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
        </div>

    </div>
</nav>
