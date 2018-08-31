<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
    </button>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand hidden-xs brand_fix">
                <a href="#"><img src="{{ asset('public/images/logodesk.png')}}" alt="logo" class="img-responsive center-block"> </a>
            </li>
            <li class="sidebar-brand hidden-lg hidden-md hidden-sm mob_brand">
                <a href="#"><img src="{{ asset('public/images/logo.png')}}" alt="logo" class="img-responsive center-block"> </a>
            </li>
            <li>
                <a href="#"><span class="menu_icon"><img src="{{ asset('public/images/m_four.png')}}" class="img-responsive center-block"></span>
                    Partners List</a>
            </li>
            <li>
                <a href="#"><span class="menu_icon"><img src="{{ asset('public/images/m_three.png')}}" class="img-responsive center-block">
                    </span>Notification Settings</a>
            </li>
            <li>
                <a href="#"><span class="menu_icon"><img src="{{ asset('public/images/m_two.png')}}" class="img-responsive center-block"></span>Account
                    Settings</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="menu_icon"><img src="{{ asset('public/images/m_one.png')}}" class="img-responsive center-block"></span>{{ __('Logout') }}</a>
            </li>
        </ul>
    </nav>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
