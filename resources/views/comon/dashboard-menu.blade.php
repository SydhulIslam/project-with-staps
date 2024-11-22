            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('home') }}" class="app-brand-link justify-content-center">
                        <img loading="prelaod" decoding="async" class="img-fluid dashboard-logo" width="160"
                            src="assets/assets/img/logo.png" alt="Wallet">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Sydhul</span>
                    </a>


                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="{{ route('deshboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Layouts -->

                    {{-- Blogs --}}


                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Blogs</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Blogs</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{route('admin-blog.index')}}" class="menu-link">
                                    <div data-i18n="Without menu">All Blogs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('admin-blog.create')}}" class="menu-link">
                                    <div data-i18n="Without navbar">Create Blog</div>
                                </a>
                            </li>
                        </ul>

                    </li>

                    {{-- End Blogs --}}



                    {{-- Category --}}
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Categoris</span>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Categoris</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{route('category.index')}}" class="menu-link">
                                    <div data-i18n="Account">All-Categoris</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- End Category --}}


                    <!-- Components -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Users</span>
                    </li>

                    <!-- User interface -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="User interface">Users</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{route('user.index')}}" class="menu-link">
                                    <div data-i18n="Accordion">All Users</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('user.create')}}" class="menu-link">
                                    <div data-i18n="Alerts">Create User</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('user.profile')}}" class="menu-link">
                                    <div data-i18n="Badges">Profile</div>
                                </a>
                            </li>
                        </ul>
                    </li>



                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Roles &amp;
                            Permition</span></li>
                    <!-- Forms -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Elements">Roles &amp;Permition</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{route('permission.index')}}" class="menu-link">
                                    <div data-i18n="Basic Inputs">All Permissions</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('role.index')}}" class="menu-link">
                                    <div data-i18n="Input groups">All Roles</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->
