<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Easy Teacher 46</a></div>
<div class="sl-sideleft">
    <b>Nama</b>
    @if (Auth::check())
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
    @endif
    <br>
    <b>Email :</b>
    @if (Auth::check())
        <span class="hidden-xs">{{ Auth::user()->email }}</span>
    @endif
    <label class="s;-">


    @endif
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
            </div>
        </a>

        <a href="{{ route('programsemester.index') }}" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-box tx-22"></i>
                <span class="menu-item-label">Administrasi Guru</span>    
            </div>
        </a>


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
