{{-- Sidebar --}}
<nav id="sidebar">
    {{-- Sidebar Scroll Container --}}
    <div id="sidebar-scroll">
        {{-- Sidebar Content --}}
        {{-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode --}}
        <div class="sidebar-content">
            {{-- Side Header --}}
            <div class="side-header side-content bg-white-op">
                {{-- Layout API, functionality initialized in App() -> uiLayoutApi() --}}
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                {{-- Themes functionality initialized in App() -> uiHandleTheme() --}}
                <div class="btn-group pull-right">
                    <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                        <i class="si si-drop"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                        <li>
                            <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{!! ripple_asset('/css/themes/amethyst.min.css') !!}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{!! ripple_asset('/css/themes/city.min.css') !!}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{!! ripple_asset('/css/themes/flat.min.css') !!}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{!! ripple_asset('/css/themes/modern.min.css') !!}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{!! ripple_asset('/css/themes/smooth.min.css') !!}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="h5 text-white" href="{!! url('/admin') !!}">
                    <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>
                </a>
            </div>
            {{-- END Side Header --}}

            {{-- Side Content --}}
            <div class="side-content">
                <ul class="nav-main">
                    <li>
                        <a class="active" href="{!! url('/admin') !!}"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-hide">Utility</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="javascript:void(0);"><i class="si si-wrench"></i><span class="sidebar-mini-hide">Preferences</span></a>
                        <ul>
                            <li>
                                <a href="{!! route('Ripple::adminSettings') !!}">Settings</a>
                            </li>
                            <li>
                                <a href="{!! route('Ripple::adminDatabase') !!}">Database</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {{-- END Side Content --}}
        </div>
        {{-- Sidebar Content --}}
    </div>
    {{-- END Sidebar Scroll Container --}}
</nav>
{{-- END Sidebar --}}