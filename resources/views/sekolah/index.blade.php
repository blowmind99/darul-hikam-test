<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">

<head>
    <base href="../../">
    <title>
        Dashboard
    </title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <link href="https://127.0.0.1:8000" rel="canonical" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="@keenthemes" name="twitter:site" />
    <meta content="@keenthemes" name="twitter:creator" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="Darul Hikam Login " name="twitter:title" />
    <meta content="" name="twitter:description" />
    <meta content="{{ asset('assets/dashboard/image/og-image.png') }}" name="twitter:image" />
    <meta content="https://127.0.0.1:8000" property="og:url" />
    <meta content="en_US" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="@keenthemes" property="og:site_name" />
    <meta content="Metronic - Tailwind CSS " property="og:title" />
    <meta content="" property="og:description" />
    <meta content="{{ asset('assets/dashboard/image/og-image.png') }}" property="og:image" />
    <link href="{{ asset('assets/dashboard/image/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" />
    <link href="{{ asset('assets/dashboard/image/favicon-32x32.png') }}" rel="icon" sizes="32x32"
        type="image/png" />
    <link href="{{ asset('assets/dashboard/image/favicon-16x16.png') }}" rel="icon" sizes="16x16"
        type="image/png" />
    <link href="{{ asset('assets/dashboard/image/favicon.ico') }}" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="{{ asset('assets/dashboard/css/apexcharts.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dashboard/css/styles-bundle.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dashboard/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body
    class="antialiased flex h-full text-base text-foreground bg-background [--header-height:60px] [--sidebar-width:270px] lg:overflow-hidden bg-muted">
    <!-- Theme Mode -->
    <script>
        const defaultThemeMode = 'light'; // light|dark|system
        let themeMode;

        if (document.documentElement) {
            if (localStorage.getItem('kt-theme')) {
                themeMode = localStorage.getItem('kt-theme');
            } else if (
                document.documentElement.hasAttribute('data-kt-theme-mode')
            ) {
                themeMode =
                    document.documentElement.getAttribute('data-kt-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }

            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                    'dark' :
                    'light';
            }

            document.documentElement.classList.add(themeMode);
        }
    </script>
    <!-- End of Theme Mode -->

    <!-- Page -->
    <!-- Base -->
    <div class="flex grow">
        <!-- Header -->
        <header class="flex lg:hidden items-center fixed z-10 top-0 start-0 end-0 shrink-0 bg-muted h-(--header-height)"
            id="header">
            <!-- Container -->
            <div class="kt-container-fixed flex items-center justify-between flex-wrap gap-3">
                <a href="#">
                    <img class="dark:hidden min-h-[30px]"
                        src="{{ asset('assets/dashboard/image/mini-logo-gray.svg') }}" />
                    <img class="hidden dark:block min-h-[30px]"
                        src="{{ asset('assets/dashboard/image/mini-logo-gray-dark.svg') }}" />
                </a>
                <button class="kt-btn kt-btn-icon kt-btn-ghost -me-2" data-kt-drawer-toggle="#sidebar">
                    <i class="ki-filled ki-menu">
                    </i>
                </button>
            </div>
            <!-- End of Container -->
        </header>
        <!-- End of Header -->

        <!-- Sidebar -->
        <div class="fixed top-0 bottom-0 z-20 hidden lg:flex flex-col shrink-0 w-(--sidebar-width) bg-muted [--kt-drawer-enable:true] lg:[--kt-drawer-enable:false]"
            data-kt-drawer="true" data-kt-drawer-class="kt-drawer kt-drawer-start flex top-0 bottom-0" id="sidebar">
            <!-- Sidebar Header -->
            <div id="sidebar_header">
                <div class="flex items-center gap-2.5 px-3.5 h-[70px]">
                    <a href="#">
                        <img class="dark:hidden h-[42px]"
                            src="{{ asset('assets/dashboard/image/mini-logo-circle.svg') }}" />
                        <img class="hidden dark:inline-block h-[42px]"
                            src="assets/media/app/mini-logo-circle-dark.svg" />
                    </a>
                    <div class="kt-menu kt-menu-default grow" data-kt-menu="true">
                        <div class="kt-menu-item grow" data-kt-menu-item-offset="0px,0px"
                            data-kt-menu-item-placement="bottom-start" data-kt-menu-item-toggle="dropdown"
                            data-kt-menu-item-trigger="hover">
                            <div class="kt-menu-label cursor-pointer text-mono font-medium grow justify-between">
                                <span class="text-base font-medium text-mono grow justify-start">
                                    Hallo {{ auth()->user()->name }}
                                </span>
                                <span class="kt-menu-arrow">
                                    <i class="fa-solid fa-chevron-down">
                                    </i>
                                </span>
                            </div>
                            <div class="kt-menu-dropdown w-48 py-2">
                                <div class="kt-menu-item">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="kt-menu-link"
                                            style="border:none;background:none;width:100%;text-align:left;">
                                            <span class="kt-menu-icon">
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                            </span>
                                            <span class="kt-menu-title">
                                                Logout
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Sidebar Header -->

            <!-- Sidebar menu -->
            <div class="flex items-stretch grow shrink-0 justify-center my-5" id="sidebar_menu">
                <div class="kt-scrollable-y-auto grow" data-kt-scrollable="true"
                    data-kt-scrollable-dependencies="#sidebar_header, #sidebar_footer"
                    data-kt-scrollable-height="auto" data-kt-scrollable-offset="0px"
                    data-kt-scrollable-wrappers="#sidebar_menu">
                    <!-- Primary Menu -->
                    <div class="kt-menu flex flex-col w-full gap-1.5 px-3.5" data-kt-menu="true"
                        data-kt-menu-accordion-expand-all="false" id="sidebar_primary_menu">
                        <div class="kt-menu-item">
                            <a class="kt-menu-link gap-2.5 py-2 px-2.5 rounded-md border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border text-decoration-none"
                                href="{{'/dashboard'}}">
                                <span
                                    class="kt-menu-icon items-start text-lg text-secondary-foreground kt-menu-item-active:text-foreground kt-menu-item-here:text-foreground kt-menu-item-show:text-foreground kt-menu-link-hover:text-foreground dark:menu-item-active:text-mono dark:menu-item-here:text-mono dark:menu-item-show:text-mono dark:menu-link-hover:text-mono">
                                    <i class="fa-solid fa-house">
                                    </i>
                                </span>
                                <span
                                    class="kt-menu-title text-sm text-foreground font-medium kt-menu-item-here:text-mono kt-menu-item-show:text-mono kt-menu-link-hover:text-mono">
                                    Dashboard
                                </span>
                            </a>
                        </div>
                        
                        <div class="kt-menu-item">
                            <a class="kt-menu-link gap-2.5 py-2 px-2.5 rounded-md border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border text-decoration-none"
                                href="{{'/dashboard/yayasan'}}">
                                <span
                                    class="kt-menu-icon items-start text-lg text-secondary-foreground kt-menu-item-active:text-foreground kt-menu-item-here:text-foreground kt-menu-item-show:text-foreground kt-menu-link-hover:text-foreground dark:menu-item-active:text-mono dark:menu-item-here:text-mono dark:menu-item-show:text-mono dark:menu-link-hover:text-mono">
                                    <i class="fa-solid fa-building">
                                    </i>
                                </span>
                                <span
                                    class="kt-menu-title text-sm text-foreground font-medium kt-menu-item-here:text-mono kt-menu-item-show:text-mono kt-menu-link-hover:text-mono">
                                    Yayasan
                                </span>
                            </a>
                        </div>
                        
                        <div class="kt-menu-item">
                            <a class="kt-menu-link gap-2.5 py-2 px-2.5 rounded-md border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border text-decoration-none"
                                href="{{'/dashboard/sekolah'}}">
                                <span
                                    class="kt-menu-icon items-start text-lg text-secondary-foreground kt-menu-item-active:text-foreground kt-menu-item-here:text-foreground kt-menu-item-show:text-foreground kt-menu-link-hover:text-foreground dark:menu-item-active:text-mono dark:menu-item-here:text-mono dark:menu-item-show:text-mono dark:menu-link-hover:text-mono">
                                    <i class="fa-solid fa-school">
                                    </i>
                                </span>
                                <span
                                    class="kt-menu-title text-sm text-foreground font-medium kt-menu-item-here:text-mono kt-menu-item-show:text-mono kt-menu-link-hover:text-mono">
                                    Sekolah
                                </span>
                            </a>
                        </div>
                        
                    </div>
                    <!-- End of Primary Menu -->
                    <div class="border-b border-input mt-4 mb-1 mx-3.5">
                    </div>
                </div>
            </div>
            <!-- End of Sidebar kt-menu-->
        </div>
        <!-- End of Sidebar -->
        <!-- Wrapper -->
        <div class="flex flex-col lg:flex-row grow pt-(--header-height) lg:pt-0">
            <!-- Main -->
            <div class="flex flex-col grow items-stretch rounded-xl bg-background border border-input lg:ms-(--sidebar-width) mt-0 lg:mt-[15px] m-[15px]">
                <div class="flex flex-col grow kt-scrollable-y-auto [--kt-scrollbar-width:auto] pt-5"
                    id="scrollable_content">
                    <main class="grow" role="content">
                        <!-- Toolbar -->
                        <div class="pb-5">
                            <!-- Container -->
                            <div class="kt-container-fixed flex items-center justify-between flex-wrap gap-3">
                                <div class="flex items-center flex-wrap gap-1 lg:gap-5">
                                    <h1 class="font-medium text-lg text-mono">
                                        Dashbboard
                                    </h1>
                                </div>
                            </div>
                            <!-- End of Container -->
                        </div>
                        <!-- End of Toolbar -->
                        <div class="kt-container-fixed">
                            {{-- TABLE YAYASAN --}}
                            @if(session('success'))
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: '{{ session('success') }}',
                                    timer: 2000,
                                    showConfirmButton: false
                                })
                                </script>
                            @endif

                            @if(session('error'))
                                <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: '{{ session('error') }}'
                                })
                                </script>
                            @endif
                            <div class="mb-10">
                                <div class="d-flex justify-content-between align-items-center mb-3">

                                    <h2 class="text-lg font-semibold">
                                        Data Sekolah
                                    </h2>

                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                                        Tambah Sekolah
                                    </button>

                                </div>

                                <div class="overflow-x-auto">
                                    <table class="table table-bordered table-striped">
                                        <thead class="bg-gray-100">
                                            <tr>
                                                <th class="border px-4 py-2">No</th>
                                                <th class="border px-4 py-2">Nama Sekolah</th>
                                                <th class="border px-4 py-2">Nama Yayasan</th>
                                                <th class="border px-4 py-2">Alamat</th>
                                                <th class="border px-4 py-2">No Telepon Sekolah</th>
                                                <th class="border px-4 py-2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($sekolah as $y)

                                            <tr>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $y->nama }}</td>
                                                <td>{{ $y->yayasan->nama }}</td>
                                                <td>{{ $y->alamat }}</td>
                                                <td>{{ $y->telepon }}</td>

                                                <td>

                                                    <button class="btn btn-warning btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $y->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <button class="btn btn-danger btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $y->id }}">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>

                                                </td>

                                            </tr>
                                            @include('sekolah.modal_edit')
                                            @include('sekolah.modal_delete')

                                            @empty

                                            <tr>
                                            <td colspan="6" class="text-center py-4">Tidak ada data</td>
                                            </tr>

                                            @endforelse

                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>

                    </main>
                    
                    <!-- Footer -->
                    <footer class="footer">
                        <!-- Container -->
                        <div class="kt-container-fixed">
                            <div
                                class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
                                <div class="flex order-2 md:order-1 gap-2 font-normal text-sm">
                                    <span class="text-muted-foreground">
                                        2026©
                                    </span>
                                    <a class="text-secondary-foreground hover:text-primary"
                                        href="https://keenthemes.com">
                                        Rifqi Fauzi Rahmat.
                                    </a>
                                </div>
                                <nav
                                    class="flex order-1 md:order-2 gap-4 font-normal text-sm text-secondary-foreground">
                                    <a class="hover:text-primary"
                                        href="https://keenthemes.com/metronic/tailwind/docs">
                                        Docs
                                    </a>
                                    <a class="hover:text-primary" href="https://1.envato.market/Vm7VRE">
                                        Purchase
                                    </a>
                                    <a class="hover:text-primary"
                                        href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                                        FAQ
                                    </a>
                                    <a class="hover:text-primary" href="https://devs.keenthemes.com">
                                        Support
                                    </a>
                                    <a class="hover:text-primary"
                                        href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                                        License
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <!-- End of Container -->
                    </footer>
                    <!-- End of Footer -->
                </div>
            </div>
            <!-- End of Main -->
        </div>
        <!-- End of Wrapper -->

    </div>
        @include('sekolah.modal_create')

    <!-- End of Page -->
    <!-- Scripts -->
    <script src="{{ asset('assets/dashboard/js/core.bundle.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/ktui.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/general.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- End of Scripts -->
</body>

</html>
