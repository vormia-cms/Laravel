<div id="sidebar" class="active">
    <div class="sidebar-wrapper vrm-admin-sidebar active">
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item">
                    <a href="{{ url('/vrm/dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill vrm-icon"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- separator -->
                <hr />

                <section class="vrm-nav-section" menu-type="content-top"></section>

                <section class="vrm-nav-section" menu-type="content">
                    <li class="sidebar-item has-sub active">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-file-earmark-word-fill vrm-icon"></i>
                            <span>Blogs</span>
                        </a>
                        <ul class="submenu active">
                            <li class="submenu-item active">
                                <a href="{{ url('/vrm/blogs') }}">All</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ url('/vrm/blogs/add') }}">New</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('/vrm/tags') }}">Tags</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('/vrm/categories') }}">Categories</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('/vrm/comments') }}">Comments</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ url('/vrm/pages') }}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-text-fill vrm-icon"></i>
                            <span>Pages</span>
                        </a>
                    </li>

                    <li class="sidebar-item d-none">
                        <a href="" class='sidebar-link'>
                            <i class="bi bi-image-fill vrm-icon"></i>
                            <span>Gallery</span>
                        </a>
                    </li>
                </section>

                <!-- separator -->
                <hr />
                <section class="vrm-nav-section" menu-type="enhance-top"></section>

                <section class="vrm-nav-section" menu-type="enhance">
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-sliders vrm-icon"></i>
                            <span>Tools</span>
                        </a>
                        <ul class="submenu submenu-ul">
                            <li class="submenu-item ">
                                <a href="/tools/inheritance/manage.php">Inheritances</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/tools/shortcode/manage.php">Shortcodes</a>
                            </li>
                            <li class="submenu-item d-none">
                                <a href="">Widgets</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/tools/helper/list.php">Helpers</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/tools/field/list.php">Fields</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item has-sub d-none">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-boxes vrm-icon"></i>
                            <span>Extensions</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="">Add New</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Installed</a>
                            </li>
                        </ul>
                    </li>
                </section>

                <!-- separator -->
                <hr />

                <section class="vrm-nav-section" menu-type="control-top"></section>

                <section class="vrm-nav-section" menu-type="control">
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-person-lines-fill vrm-icon"></i>
                            <span>Users</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="/user/list.php">All</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/user/add.php">Add New</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/user/profile.php">My Profile</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-gear-fill vrm-icon"></i>
                            <span>Controls</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item">
                                <a href="/access/manage.php">Access</a>
                            </li>
                            <li class="submenu-item d-none">
                                <a href="">Themes</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/fieldtype/list.php">Fields Type</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/modulelist/manage.php">Modules List</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/inheritancelist/manage.php">Inheritance List</a>
                            </li>
                        </ul>
                    </li>
                </section>

                <!-- separator -->
                <hr />

                <section class="vrm-nav-section" menu-type="setting-top"></section>

                <section class="vrm-nav-section" menu-type="setting">
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-wrench vrm-icon"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="/setting/visibility.php">Visibility</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/setting/system.php">System</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/setting/mail.php">Mailing</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/setting/tweak.php">Tweaks</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/setting/media.php">Media</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/setting/robot.php">Robots</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/setting/writting.php">Writting</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/setting/reading.php">Reading</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/setting/blog.php">Blog</a>
                            </li>
                        </ul>
                    </li>
                </section>

                <li class="sidebar-item  ">
                    <a href="{{ url('/') }}" class='sidebar-link'>
                        <i class="bi bi-power vrm-icon"></i>
                        <span>Logout</span>
                    </a>
                </li>

                <!-- separator -->
                <hr />

                <li class="sidebar-item d-none">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-life-preserver vrm-icon"></i>
                        <span>Documentation</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
