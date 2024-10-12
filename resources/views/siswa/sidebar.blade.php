<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Easy Teacher 46</a></div>
<div class="sl-sideleft">
    <b>Email :</b>
    @if (Auth::check())
        <span class="hidden-xs">{{ auth('siswa')->user()->email }}</span>
    @endif

    <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
            <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
    </div><!-- input-group -->

    <label class="sidebar-label">
        <h6>Navigation</h6>
    </label>
    <div class="sl-sideleft-menu">
        <a href="{{ route('siswa.dashboard') }}" class="sl-menu-link active">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <!-- Menu Rekap -->
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-paper tx-22"></i>
                <span class="menu-item-label">Rekap</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href=#" class="nav-link">Nilai Ulangan Harian</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Nilai Tengah Semester</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Nilai Akhir Semester</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Sikap</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Ledger</a></li>
        </ul>
        <!-- End Menu Rekap -->
    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
