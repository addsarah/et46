<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Easy Teacher 46</a></div>
<div class="sl-sideleft">
    <b>Email :</b>
    @if (Auth::check())
        <span class="hidden-xs">{{ Auth::user()->email }}</span>
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
        <a href="{{ route('dashboard') }}" class="sl-menu-link active">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <!-- Menu adm guru -->
        <a href="{{ route('dashboard') }}" class="sl-menu-link">
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-box tx-22"></i>
                <span class="menu-item-label">Administrasi Guru</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
            <!--
        </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('programsemester.index') }}" class="nav-link">Program
                        Semester</a></li>
                <li class="nav-item"><a href="{{ route('programtahunan.index') }}" class="nav-link">Program Tahunan</a>
                </li>
                <li class="nav-item"><a href="{{ route('kktp.index') }}" class="nav-link">KKTP</a></li>
                <li class="nav-item"><a href="{{ route('atp.index') }}" class="nav-link">TP / ATP</a></li>
                <li class="nav-item"><a href="{{ route('mapel.index') }}" class="nav-link">Mata Pelajaran</a></li>
                <li class="nav-item"><a href="{{ route('addsiswa.index') }}" class="nav-link">Siswa</a></li>
            </ul>
            <!-- end Menu adm guru -->

            <!-- Menu berkas assesmen -->
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-bookmarks tx-20"></i>
                    <span class="menu-item-label">Berkas Asesmen</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('kisi_kisi.index') }}" class="nav-link">Kisi - kisi</a></li>
                <li class="nav-item"><a href="{{ route('kartu_soal.index') }}" class="nav-link">Kartu Soal</a></li>
                <li class="nav-item"><a href="{{ route('reportkartu_soal.index') }}" class="nav-link">Soal</a></li>
            </ul>
            <!-- End Menu berkas assesmen -->

            <!-- Menu Nilai -->
            <a href="{{ route('dashboard') }}" class="sl-menu-link">
            </a><!-- sl-menu-link -->
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-paper tx-22"></i>
                    <span class="menu-item-label">Nilai</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!--
        </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item"><a href="{{ route('ulangan_harian.index') }}" class="nav-link">Ulangan Harian</a></li>
                    <li class="nav-item"><a href="{{ route('tengah_semester.index') }}" class="nav-link">Tengah Semester</a></li>
                    <li class="nav-item"><a href="{{ route('akhir_semester.index') }}" class="nav-link">Akhir Semester</a></li>
                    <li class="nav-item"><a href="{{ route('nilai.index') }}" class="nav-link">Nilai</a></li>
                    <li class="nav-item"><a href="{{ route('remedial.index') }}" class="nav-link">Remedial</a></li>
                    <li class="nav-item"><a href="{{ route('sikap.index') }}" class="nav-link">Sikap</a></li>
                </ul>
                <!-- Menu Nilai -->

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
    
    <form method="POST" action="{{ route('logout') }}" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="icon ion-power"></i>
        @csrf
        <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                          this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
        </div>
    </form>
    <br>
</div><!-- sl-sideleft -->
