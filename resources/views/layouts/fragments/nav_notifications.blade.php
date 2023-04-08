<li class="dropdown notification-list">
    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="dripicons-bell noti-icon"></i>
        <span class="noti-icon-badge"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">

        <!-- item-->
        <div class="dropdown-item noti-title">
            <h5 class="m-0">
                            <span class="float-end">
                                <a href="javascript: void(0);" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
            </h5>
        </div>

        <div style="max-height: 230px;" data-simplebar>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-primary">
                    <i class="mdi mdi-comment-account-outline"></i>
                </div>
                <p class="notify-details">Caleb Flakelar commented on Admin
                    <small class="text-muted">1 min ago</small>
                </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-info">
                    <i class="mdi mdi-account-plus"></i>
                </div>
                <p class="notify-details">New user registered.
                    <small class="text-muted">5 hours ago</small>
                </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon">
                    <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                <p class="notify-details">Cristina Pride</p>
                <p class="text-muted mb-0 user-msg">
                    <small>Hi, How are you? What about our next meeting</small>
                </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-primary">
                    <i class="mdi mdi-comment-account-outline"></i>
                </div>
                <p class="notify-details">Caleb Flakelar commented on Admin
                    <small class="text-muted">4 days ago</small>
                </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon">
                    <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                <p class="notify-details">Karen Robinson</p>
                <p class="text-muted mb-0 user-msg">
                    <small>Wow ! this admin looks good and awesome design</small>
                </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-info">
                    <i class="mdi mdi-heart"></i>
                </div>
                <p class="notify-details">Carlos Crouch liked
                    <b>Admin</b>
                    <small class="text-muted">13 days ago</small>
                </p>
            </a>
        </div>

        <a href="{{ route("notifications") }}" class="dropdown-item text-center text-primary notify-item notify-all">
            View All
        </a>

    </div>
</li>
