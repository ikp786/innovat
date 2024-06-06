<!-- BEGIN: Main Menu -->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('front/upload/files/Innovate-H5.png') }}" style="height:45px;" alt="Innovate">
                    {{-- <h2 class="brand-text">Innovate</h2> --}}
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc" data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            
            <li class="nav-item {{ \Str::is('admin.dashboard', request()->route()->getName()) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}">
                    <span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item {{ \Str::is('admin.services.*', request()->route()->getName()) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.services.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Services">Service</span>
                </a>
            </li>
            
            <li class="nav-item {{ \Str::is('admin.pages.*', request()->route()->getName()) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.pages.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="pages">Sub Service</span>
                </a>
            </li>
            
            <li class="nav-item {{ \Str::is('admin.newses.*', request()->route()->getName()) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.newses.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="newses">News</span>
                </a>
            </li>
            
            <li class="nav-item {{ \Str::is('admin.banners.*', request()->route()->getName()) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.banners.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="banners">Banner</span>
                </a>
            </li>

            <li class="nav-item {{ \Str::is('admin.settings.*', request()->route()->getName()) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.settings.edit') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="settings">Setting</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu -->
