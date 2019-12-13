<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <a href="admin">
                <img src="images/logo_kazo.png" class="logo" alt=""
                    data-src="images/logo_kazo.png" data-src-retina="images/logo_kazo.png"
                    width="220" height="50px" />
            </a>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a  class="" id="layout-condensed-toggle">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <div class="chat-toggler sm">
                    <div class="profile-pic">
                        <img src="assets/img_user/anh.jpg" alt=""
                            data-src="assets/img_user/anh.jpg"
                            data-src-retina="assets/img_user/anh.jpg" width="35"
                            height="35" />
                        <div class="availability-bubble online"></div>
                    </div>
                </div>
                <ul class="nav quick-section ">
                    <li class="quicklinks">
                        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                            <i class="material-icons">tune</i>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                            {{-- <li>
                                <a href="user-profile.html"> My Account</a>
                            </li>
                            <li>
                                <a href="calender.html">My Calendar</a>
                            </li>
                            <li>
                                <a href="email.html"> My Inbox&nbsp;&nbsp;
                                    <span class="badge badge-important animated bounceIn">2</span>
                                </a>
                            </li> --}}
                            @can('admin')
                            <li>
                                <a href="admin/phanquyen">Sửa quyền</a>
                            </li>
                            @endcan
                            <li>
                                    <a href="admin/password">Đổi mật khẩu</a>
                                </li>
                            <li class="divider"></li>
                            <li>
                                <a href="admin/logout"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log
                                    Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
