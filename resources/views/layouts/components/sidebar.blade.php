<div class="leftside-menu leftside-menu-detached">

    @if (auth()->check())
        <div class="leftbar-user">
            <a href="{{ route("profile") }}">
                <img src="{{ asset("assets/images/users/avatar-1.jpg") }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">{{ Str::length(Auth::user()->surname) > 10 ? Str::limit(Auth::user()->surname, 1, '.') : Auth::user()->surname}} {{ Auth::user()->name }}</span>
            </a>
        </div>
    @endif

    <ul class="side-nav">

        <li class="side-nav-title side-nav-item">Navigation</li>

        <li class="side-nav-item">
            <a href="{{ route("home") }}" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span> Home </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                <i class="uil-chart"></i>
{{--                <span class="badge bg-info rounded-pill float-end">4</span>--}}
                <span class="menu-arrow"></span>

                <span> Dashboards </span>
            </a>
            <div class="collapse" id="sidebarDashboards">
                <ul class="side-nav-second-level">

                    <li><a href="{{ route('analytics') }}">Analytics</a></li>
                    <li><a href="{{ route('projects') }}">Projects</a></li>

                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a href="{{ route("attentions") }}" class="side-nav-link">
                <i class="uil-rss"></i>
                <span> Attentions </span>
            </a>
        </li>

        <li class="side-nav-title side-nav-item">Study</li>

        <li class="side-nav-item">
            <a href="{{ route('schedule') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Schedule </span>
            </a>
        </li>

        <li class="side-nav-item">

            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                <i class="uil-store"></i>
                <span> Study </span>
                <span class="menu-arrow"></span>
            </a>

            <div class="collapse" id="sidebarEcommerce">
                <ul class="side-nav-second-level">

                    <li><a href="{{ route('courses.materials') }}">{{ __('Materials') }}</a></li>

                    <li><a href="{{ route('video.courses') }}"> {{ __('Video Courses') }} </a></li>

                    <li><a href="{{ route('tags') }}">{{ __('Tags') }}</a></li>

                    <li><a href="#">{{ __('Documents') }}</a></li>

                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            
            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                <i class="uil-clipboard-alt"></i>
                <span> School </span>
                <span class="menu-arrow"></span>
            </a>

            <div class="collapse" id="sidebarTasks">
                <ul class="side-nav-second-level">

                    <li><a href="#">Groups</a></li>

                    <li><a href="#">Students</a></li>

                    <li><a href="#">Teachers</a></li>

                </ul>
            </div>
        </li>

        @canany(['view users', "create users", "edit users", "delete users", 'view roles', "create roles", "edit roles", "delete roles"])

            <li class="side-nav-title side-nav-item">Administration</li>


            @canany(['view users', "create users", "edit users", "delete users"])
                <li class="side-nav-item">
                    <a href="{{ route('applications') }}" class="side-nav-link">
                        <i class="uil-users-alt"></i>
                        <span> Applications </span>
                    </a>
                </li>
            @endcanany

            @canany(['view users', "create users", "edit users", "delete users"])
                <li class="side-nav-item">
                    <a href="{{ route('users') }}" class="side-nav-link">
                        <i class="uil-users-alt"></i>
                        <span> Users </span>
                    </a>
                </li>
            @endcanany

            @canany(['view roles', "create roles", "edit roles", "delete roles"])

                <li class="side-nav-item">
                    <a href="{{ route('roles') }}" class="side-nav-link">
                        <i class="mdi mdi-robot"></i>
                        <span> Roles </span>
                    </a>
                </li>

            @endcanany

        @endcanany

</ul>

<div class="help-box help-box-light text-center">
<img src="{{ asset("assets/images/help-icon.svg") }}" height="90" alt="Helper Icon Image" />
<h5 class="mt-3">CREATED BY WARIODDLY</h5>
<p class="mb-3">Чтобы получить полный доступ напишите на почту</p>
<a href="mailto: warioddly@gmail.com" class="btn btn-outline-primary btn-sm">Написать</a>
</div>

<div class="clearfix"></div>

</div>
