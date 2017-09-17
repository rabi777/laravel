<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('dashboard')}}"><i class="icon-speedometer"></i> Dashboard </a>
            </li>

            <li class="nav-title">
                MENU
            </li>
             <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Forms</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/forms/interested-students')}}"><i class="icon-puzzle"></i> Interested Students Regitration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/forms/register-students')}}"><i class="icon-puzzle"></i> Itsd Students Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/forms/course')}}"><i class="icon-puzzle"></i> Manage Course</a>
                    </li>
                </ul>
            </li>
             <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Tables</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/tables/interested-students')}}"><i class="icon-puzzle"></i> Interested Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/tables/register-students')}}"><i class="icon-puzzle"></i> Itsd Students</a>
                    </li>
                </ul>
            </li>
             <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> ITSD</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/tables/courses')}}"><i class="icon-puzzle"></i> Course & Payment</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>