<!-- TopBar -->
<div class="vrm-topbar-section" id="topbar-section">
    <div class="row">
        <div class="col-4">
            <div class="vrm-topbar-logo">
                <div class="logo vrm-logo-text-admin">
                    <!-- Humberger Menu -->
                    <a href="#" class="burger-btn d-inline d-xl-none vrm-color-red fw-bold fa-bold vrm-mobile-menu">
                        <span><i class="bi bi-justify fs-3"></i></span>
                    </a>

                    <a href="{{ url('/vrm/dashboard') }}" class="vrm-logo-link">
                        <img src="/admin/vormia/vrm/img/logo/logo-blue.png" alt="Logo" srcset="">
                        <span>Vormia</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="vrm-topcar-control">
                <!-- Add Ul list with icons -->
                <ul class="vrm-topbar-icons float-end">
                    <li class="vrm-topbar-icon">
                        <a href="{{ url('/vrm/dashboard') }}">
                            <i class="bi bi-chat-text"></i>
                            <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">20</span>
                        </a>
                    </li>
                    <li class="vrm-topbar-icon">
                        <a href="{{ url('/vrm/dashboard') }}">
                            <i class="bi bi-bell"></i>
                            <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                                100 <sup>+</sup>
                            </span>
                        </a>
                    </li>
                    <li class="vrm-topbar-icon">
                        <a href="{{ url('/vrm/dashboard') }}" target="_blank">
                            <i class="bi bi-box-arrow-up-right"></i>
                        </a>
                    </li>
                    <li class="vrm-topbar-icon">
                        <a href="{{ url('/vrm/dashboard') }}">
                            <i class="bi bi-person-badge"></i>
                            <span>Artistan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
