<!DOCTYPE html>
<html lang="en">

<!-- Head -->
@include("$directory->myTheme.includes._head")
<!-- End Head -->

<body>
    <!-- Open App -->
    <div id="app">

        <!-- Vrm Topbar -->
        <div id="vrm-topbar">
            <!-- TopBar -->
            @include("$directory->myTheme.navs.topbar")
            <!-- End TopBar -->
        </div>
        <!-- End Vrm Topbar -->

        <!-- Vrm App -->
        <div class="vrm-app">
            <!-- Vrm Sidebar -->
            <div id="vrm-sidebar">
                <!-- Nav -->
                @include("$directory->myTheme.navs.sidebar")
                <!-- End Nav -->
            </div>
            <!-- End Vrm Sidebar -->

            <!-- Vrm Content -->
            <div id="vrm-main">
                <!-- Main Page -->
                <div id="main">
                    <div class="vrm-mainsection">
                        {{-- Page Breadcrumb Section --}}
                        @yield('app-header')
                        {{-- End Page Breadcrumb Section --}}

                        {{-- Main App --}}
                        @yield('app')
                        {{-- Main App --}}
                    </div>

                    <!-- Credit -->
                    @include("$directory->myTheme.includes._credit")
                    <!-- End Credit -->
                </div>
            </div>
            <!-- End Vrm Content -->
        </div>
        <!-- End Vrm App -->

    </div>
    <!-- Close App -->

    <!-- Footer -->
    @include("$directory->myTheme.includes._footer")
    <!-- End Footer -->
</body>

</html>
