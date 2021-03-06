<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="#"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">1</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{url('/')}}" data-i18n="nav.dash.ecommerce">sales</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{route('category')}}"><i class="la la-folder-o"></i><span class="menu-title" data-i18n="nav.templates.main">
                        Categories</span></a></li>
            <li class=" nav-item"><a href="{{route('product')}}"><i class="la la-folder-o"></i><span class="menu-title" data-i18n="nav.templates.main">
                        Manage Promotion</span></a></li>
            <li class=" nav-item"><a href="#"><i class="la la-folder-o"></i><span class="menu-title" data-i18n="nav.dash.main">Configuration</span><span class="badge badge badge-info badge-pill float-right mr-2">4</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('company')}}" data-i18n="nav.dash.ecommerce">Company</a></li>
                    <li><a class="menu-item" href="{{route('province')}}" data-i18n="nav.dash.ecommerce">Province</a></li>
                    <li><a class="menu-item" href="{{route('branch')}}" data-i18n="nav.dash.ecommerce">Branch</a></li>
                    <li><a class="menu-item" href="{{route('size')}}" data-i18n="nav.dash.ecommerce">Size</a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{route('user')}}"><i class="la la-folder-o"></i><span class="menu-title" data-i18n="nav.templates.main">
                        Manage User</span></a></li>
        </ul>
    </div>
</div>
