<style>
    /* Sidebar container styling */
    .sidebar {
        width: 250px;
        background-color: #343a40;
        color: white;
        position: fixed;
        top: 55px;
        bottom: 0;
        left: 0;
        transition: all 0.3s;
        overflow-y: auto;
        padding-top: 20px;
        display: block;
    }

    .sidebar .nav-link {
        color: #fff;
        padding: 10px 15px;
    }

    .sidebar .nav-link:hover {
        background-color: #495057;
    }

    /* Hide sidebar on mobile by default */
    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-250px);
        }

        .sidebar.show {
            transform: translateX(0);
        }
    }

    #orders-submenu li a {
        color: white;
    }
</style>

{{-- <header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('dashboard*') ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('dashboard') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Dashboard') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->is('products*') ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('products.index') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-packages" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" /><path d="M2 13.5v5.5l5 3" /><path d="M7 16.545l5 -3.03" /><path d="M17 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" /><path d="M12 19l5 3" /><path d="M17 16.5l5 -3" /><path d="M12 13.5v-5.5l-5 -3l5 -3l5 3v5.5" /><path d="M7 5.03v5.455" /><path d="M12 8l5 -3" /></svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Products') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item dropdown {{ request()->is('orders*') ? 'active' : null }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package-export" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12v9" /><path d="M12 12l-8 -4.5" /><path d="M15 18h7" /><path d="M19 15l3 3l-3 3" /></svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Orders') }}
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item" href="{{ route('orders.index') }}">
                                        {{ __('All') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('orders.complete') }}">
                                        {{ __('Completed') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('orders.pending') }}">
                                        {{ __('Pending') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('due.index') }}">
                                        {{ __('Due') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown {{ request()->is('purchases*') ? 'active' : null }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package-import" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12v9" /><path d="M12 12l-8 -4.5" /><path d="M22 18h-7" /><path d="M18 15l-3 3l3 3" /></svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Purchases') }}
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item" href="{{ route('purchases.index') }}">
                                        {{ __('All') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('purchases.approvedPurchases') }}">
                                        {{ __('Approval') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('purchases.dailyPurchaseReport') }}">
                                        {{ __('Daily Purchase Report') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item {{ request()->is('quotations') ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('quotations.index') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Quotations') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item dropdown {{ request()->is('suppliers*', 'customers*') ? 'active' : null }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layers-subtract" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 4m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" /><path d="M16 16v2a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h2" /></svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Pages') }}
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item" href="{{ route('suppliers.index') }}">
                                        {{ __('Suppliers') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('customers.index') }}">
                                        {{ __('Customers') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown {{ request()->is('users*', 'categories*', 'units*') ? 'active' : null }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="icon icon-tabler icon-tabler-settings"
                                     width="24"
                                     height="24"
                                     viewBox="0 0 24 24"
                                     stroke-width="2"
                                     stroke="currentColor"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                            </span>
                                <span class="nav-link-title">
                                {{ __('Settings') }}
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item" href="{{ route('users.index') }}">
                                        {{ __('Users') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('categories.index') }}">
                                        {{ __('Categories') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('units.index') }}">
                                        {{ __('Units') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header> --}}

<div class="d-flex">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <ul class="navbar-nav flex-column">
            <!-- Dashboard Link -->

            <li class="nav-item {{ request()->is('dashboard*') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('dashboard') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                        {{ __('Dashboard') }}
                    </span>
                </a>
            </li>
          

            <!-- Products Link -->
            <li class="nav-item {{ request()->is('products*') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <!-- Products SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-packages"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                            <path d="M2 13.5v5.5l5 3" />
                            <path d="M7 16.545l5 -3.03" />
                            <path d="M17 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                            <path d="M12 19l5 3" />
                            <path d="M17 16.5l5 -3" />
                            <path d="M12 13.5v-5.5l-5 -3l5 -3l5 3v5.5" />
                            <path d="M7 5.03v5.455" />
                            <path d="M12 8l5 -3" />
                        </svg>
                    </span>
                    <span class="nav-link-title">{{ __('Products') }}</span>
                </a>
            </li>

            <!-- Orders Dropdown -->
            <li class="nav-item dropdown {{ request()->is('orders*') ? 'active' : null }}">
                <a class="nav-link dropdown-toggle collapsed" data-bs-target="#orders-submenu" href="#navbar-base" data-bs-toggle="collapse" data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package-export" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12v9" /><path d="M12 12l-8 -4.5" /><path d="M15 18h7" /><path d="M19 15l3 3l-3 3" /></svg>
                    </span>
                    <span class="nav-link-title">
                        {{ __('Orders') }}
                    </span>
                </a>

                <ul id="orders-submenu" class="nav-content collapse ms-auto ps-2" data-bs-parent="#components-nav">
                    <li>
                        <a class="dropdown-item" href="{{ route('orders.index') }}">
                            <i class="bi bi-list fs-3"></i><span>{{ __('All') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('orders.complete') }}">
                            <i class="bi bi-check-circle fs-3"></i><span>{{ __('Completed') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('orders.pending') }}">
                            <i class="bi bi-hourglass-split fs-3"></i><span>{{ __('Pending') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('due.index') }}">
                            <i class="bi bi-hourglass-split fs-3"></i><span>{{ __('Due') }}</span>
                        </a>
                    </li>

                </ul>


                {{-- <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="{{ route('orders.index') }}">
                                {{ __('All') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('orders.complete') }}">
                                {{ __('Completed') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('orders.pending') }}">
                                {{ __('Pending') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('due.index') }}">
                                {{ __('Due') }}
                            </a>
                        </div>
                    </div>
                </div> --}}
            </li>
          


            <!-- Purchases Dropdown -->
            <li class="nav-item dropdown {{ request()->is('purchases*') ? 'active' : null }}">
                <a class="nav-link dropdown-toggle collapsed" data-bs-target="#purchases-submenu" href="#navbar-base"
                    data-bs-toggle="collapse" data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <!-- Purchases SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package-import"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" />
                            <path d="M12 12l8 -4.5" />
                            <path d="M12 12v9" />
                            <path d="M12 12l-8 -4.5" />
                            <path d="M22 18h-7" />
                            <path d="M18 15l-3 3l3 3" />
                        </svg>
                    </span>
                    <span class="nav-link-title">{{ __('Purchases') }}</span>
                </a>
                <ul id="purchases-submenu" class="nav-content collapse ms-auto ps-2" data-bs-parent="#components-nav">
                    <li>
                        <a class="dropdown-item" href="{{ route('purchases.index') }}">
                            <i class="bi bi-list fs-3"></i><span>{{ __('All') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('purchases.approvedPurchases') }}">
                            <i class="bi bi-check-circle fs-3"></i><span>{{ __('Approval') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('purchases.dailyPurchaseReport') }}">
                            <i class="bi bi-hourglass-split fs-3"></i><span>{{ __('Daily Purchase Report') }}</span>
                        </a>
                    </li>

                </ul>
                {{-- <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('purchases.index') }}">{{ __('All') }}</a>
                    <a class="dropdown-item"
                        href="{{ route('purchases.approvedPurchases') }}">{{ __('Approval') }}</a>
                    <a class="dropdown-item"
                        href="{{ route('purchases.dailyPurchaseReport') }}">{{ __('Daily Purchase Report') }}</a>
                </div> --}}
            </li>

            <li class="nav-item {{ request()->is('quotations') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('quotations.index') }}">
                    <span
                        class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        </svg>
                    </span>
                    <span class="nav-link-title">
                        {{ __('Quotations') }}
                    </span>
                </a>
            </li>

            <li class="nav-item dropdown {{ request()->is('suppliers*', 'customers*') ? 'active' : null }}">
                <a class="nav-link dropdown-toggle collapsed" data-bs-target="#pages-submenu" href="#navbar-base"
                    data-bs-toggle="collapse" data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layers-subtract"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 4m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                            <path d="M16 16v2a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h2" />
                        </svg>
                    </span>
                    <span class="nav-link-title">
                        {{ __('Pages') }}
                    </span>
                </a>

                <ul id="pages-submenu" class="nav-content collapse ms-auto ps-2" data-bs-parent="#components-nav">
                    <li>
                        <a class="dropdown-item" href="{{ route('suppliers.index') }}">
                            <i class="bi bi-list fs-3"></i><span>{{ __('Suppliers') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('customers.index') }}">
                            <i class="bi bi-check-circle fs-3"></i><span>{{ __('Customers') }}</span>
                        </a>
                    </li>
                </ul>


                {{-- <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="{{ route('suppliers.index') }}">
                                {{ __('Suppliers') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('customers.index') }}">
                                {{ __('Customers') }}
                            </a>
                        </div>
                    </div>
                </div> --}}
            </li>

            <li class="nav-item dropdown {{ request()->is('users*', 'categories*', 'units*') ? 'active' : null }}">
                <a class="nav-link dropdown-toggle collapsed" data-bs-target="#settings-submenu" href="#navbar-base" data-bs-toggle="collapse"
                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                    </span>
                    <span class="nav-link-title">
                        {{ __('Settings') }}
                    </span>
                </a>

                
                <ul id="settings-submenu" class="nav-content collapse ms-auto ps-2" data-bs-parent="#components-nav">
                    <li>
                        <a class="dropdown-item" href="{{ route('users.index') }}">
                            <i class="bi bi-list fs-3"></i><span>{{ __('Users') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('categories.index') }}">
                            <i class="bi bi-check-circle fs-3"></i><span>{{ __('Categories') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('units.index') }}">
                            <i class="bi bi-check-circle fs-3"></i><span>{{ __('Units') }}</span>
                        </a>
                    </li>
                </ul>

                {{-- <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="{{ route('users.index') }}">
                                {{ __('Users') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('categories.index') }}">
                                {{ __('Categories') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('units.index') }}">
                                {{ __('Units') }}
                            </a>
                        </div>
                    </div>
                </div> --}}
            </li>

        </ul>
    </div>


</div>
