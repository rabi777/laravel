	<header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>

        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="{{URL::to('dashboard')}}">Dashboard</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{URL::to('public/img/avatars/8.jpg')}}" class="img-avatar" alt="admin">
                    <span class="d-md-down-none">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    @guest
                    @else
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                        <i class="fa fa-lock"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </li>
        </ul>
		<a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger"></span></a>
    </header>