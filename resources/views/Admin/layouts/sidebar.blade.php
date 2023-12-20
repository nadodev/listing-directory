<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Starter</li>
            <li class="{{ setSidebarActive(['admin.dashboard.index']) }}"><a class="nav-link" href="{{ route('admin.dashboard.index') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

            <li class="dropdown {{ setSidebarActive([
                'admin.hero.index',
                'admin.our-features.index',
                'admin.counter.index',
                'admin.section-title.index'
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns"></i> <span>Sections</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.hero.index']) }}"><a class="nav-link" href="{{ route('admin.hero.index') }}">Hero</a></li>
                    <li class=""><a class="nav-link" href="">Our Features</a></li>
                    <li class=""><a class="nav-link" href="">Counter</a></li>
                    <li class=""><a class="nav-link" href="">Section Titles</a></li>

                </ul>
            </li>
        </ul>
    </aside>
</div>
