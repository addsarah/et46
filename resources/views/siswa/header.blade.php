<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    @if (Auth::guard('siswa')->check())
                        <span class="hidden-xs">{{ Auth::guard('siswa')->user()->nama_siswa }}</span>
                        <img src="{{ asset('backend/img/img3.jpg') }}" class="wd-32 rounded-circle" alt="">
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                        <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                        <a href="{{ route('siswa.logout') }}"><i class="icon ion-power"></i> Sign Out</a>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- sl-header-right -->
</div><!-- sl-header -->
