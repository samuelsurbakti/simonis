<header class="topbar">
    <div class="with-vertical">
        <nav class="navbar navbar-expand-lg p-0">
            <ul class="navbar-nav">
                <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                    <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>
            <div class="d-block d-lg-none py-4">
                <a href="{{ route('Simonis | Home') }}" class="text-nowrap logo-img">
                    <img style="height: 31px;" src="{{ asset('src/assets/logo/logo-dark.svg') }}" class="dark-logo" alt="Logo-Dark" />
                    <img style="height: 31px;" src="{{ asset('src/assets/logo/logo-light.svg') }}" class="light-logo" alt="Logo-light" />
                </a>
            </div>
            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti ti-dots fs-7"></i>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <li class="nav-item nav-icon-hover-bg rounded-circle">
                            <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                <i class="ti ti-moon moon"></i>
                            </a>
                            <a class="nav-link sun light-layout" href="javascript:void(0)">
                                <i class="ti ti-sun sun"></i>
                            </a>
                        </li>
                        <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                            <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                            <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                    <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                    <span class="badge text-bg-primary rounded-2 px-3 py-1 lh-sm">5 new</span>
                                </div>
                                <div class="message-body" data-simplebar>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">Roman Joined the Team!</h6>
                                            <span class="fs-3 d-block text-body-secondary">Congratulate him</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">New message</h6>
                                            <span class="fs-3 d-block text-body-secondary">Salma sent you new message</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">Bianca sent payment</h6>
                                            <span class="fs-3 d-block text-body-secondary">Check your earnings</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">Jolly completed tasks</h6>
                                            <span class="fs-3 d-block text-body-secondary">Assign her new tasks</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-6.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">John received payment</h6>
                                            <span class="fs-3 d-block text-body-secondary">$230 deducted from account</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-7.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">Roman Joined the Team!</h6>
                                            <span class="fs-3 d-block text-body-secondary">Congratulate him</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="py-6 px-7 mb-1">
                                    <button class="btn btn-outline-primary w-100">See All Notifications</button>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                <div class="d-flex align-items-center gap-2 border-start ps-3">
                                    <div class="user-profile-img">
                                        <img src="{{ asset('src/img/user/' . auth()->user()->avatar . '') }}" class="rounded-circle" width="35" height="35" alt="flexy-img" />
                                    </div>
                                    <div class="d-none d-md-flex align-items-center">
                                        <h5 class="mb-0 fs-4">Hi,</h5>
                                        <h5 class="mb-0 fs-4 fw-semibold ms-1">{{ Str::words(auth()->user()->name, 1, '') }}</h5>
                                        <i class="ti ti-chevron-down"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                <div class="profile-dropdown position-relative" data-simplebar>
                                    <div class="py-3 px-7 pb-0">
                                        <h5 class="mb-0 fs-5 fw-semibold">Profil</h5>
                                    </div>
                                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                        <img src="{{ asset('src/img/user/' . auth()->user()->avatar . '') }}" class="rounded-circle" width="80" height="80" alt="{{ auth()->user()->name }} Avatar" />
                                        <div class="ms-3">
                                            <h5 class="mb-1 fs-4">{{ auth()->user()->name }}</h5>
                                            <span class="mb-1 d-block">{{ auth()->user()->getRoleNames()->first() }}</span>
                                            <p class="mb-0 d-flex align-items-center gap-2">
                                                <i class="ti ti-mail fs-4"></i> {{ auth()->user()->email }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="message-body">
                                        <a href="page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center bg-primary-subtle rounded-1 p-6">
                                                <i class="ti ti-user fs-6 text-primary"></i>
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-0 fs-4 lh-base">Profil Saya</h6>
                                                <span class="fs-3 d-block text-body-secondary">Pengaturan Akun</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-grid py-4 px-7 pt-8">
                                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="#" class="btn btn-outline-primary">Keluar</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="app-header with-horizontal">
        <nav class="navbar navbar-expand-xl container-fluid p-0">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item nav-icon-hover-bg rounded-circle d-flex d-xl-none ms-n2">
                    <a class="nav-link sidebartoggler" id="sidebarCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-xl-block">
                    <a href="index-2.html" class="text-nowrap nav-link">
                        <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="flexy-img" />
                        <img src="../assets/images/logos/light-logo.svg" class="light-logo" alt="flexy-img" />
                    </a>
                </li>
                <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-xl-flex">
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-search"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav quick-links d-none d-xl-flex align-items-center">
                <li class="nav-item nav-icon-hover-bg rounded w-auto dropdown d-none d-lg-flex">
                    <div class="hover-dd">
                        <a class="nav-link" href="javascript:void(0)"> Apps <span class="mt-1">
                                <i class="ti ti-chevron-down fs-3"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                            <div class="row">
                                <div class="col-8">
                                    <div class="ps-7 pt-7">
                                        <div class="border-bottom">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="app-chat.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-chat.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3"> Chat Application </h6>
                                                                <span class="fs-2 d-block text-body-secondary">New messages arrived</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-invoice.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">Invoice App</h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get latest invoice</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-mobile.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3"> Contact Application </h6>
                                                                <span class="fs-2 d-block text-body-secondary">2 Unsaved Contacts</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-email.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-message-box.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get new emails</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-cart.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3"> User Profile </h6>
                                                                <span class="fs-2 d-block text-body-secondary">learn more information</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-date.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3"> Calendar App </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get dates</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-lifebuoy.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3"> Contact List Table </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Add new contact</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-application.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3"> Notes Application </h6>
                                                                <span class="fs-2 d-block text-body-secondary">To-do and Daily tasks</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center py-3">
                                            <div class="col-8">
                                                <a class="fw-semibold d-flex align-items-center lh-1" href="javascript:void(0)">
                                                    <i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions </a>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end pe-4">
                                                    <button class="btn btn-primary">Check</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 ms-n4">
                                    <div class="position-relative p-7 border-start h-100">
                                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                        <ul class="">
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="page-pricing.html">Pricing Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="authentication-login.html">Authentication Design</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="authentication-register.html">Register Now</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="authentication-error.html">404 Error Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="app-notes.html">Notes App</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="page-user-profile.html">User Application</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="page-account-settings.html">Account Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown-hover d-none d-lg-block nav-icon-hover-bg rounded w-auto mx-0">
                    <a class="nav-link" href="app-chat.html">Chat</a>
                </li>
                <li class="nav-item dropdown-hover d-none d-lg-block nav-icon-hover-bg rounded w-auto mx-0">
                    <a class="nav-link" href="app-calendar.html">Calendar</a>
                </li>
                <li class="nav-item dropdown-hover d-none d-lg-block nav-icon-hover-bg rounded w-auto mx-0">
                    <a class="nav-link" href="app-email.html">Email</a>
                </li>
            </ul>
            <div class="d-block d-xl-none">
                <a href="index-2.html" class="text-nowrap nav-link">
                    <img src="../assets/images/logos/dark-logo.svg" width="180" alt="flexy-img" />
                </a>
            </div>
            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="p-2">
                    <i class="ti ti-dots fs-7"></i>
                </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <li class="nav-item nav-icon-hover-bg rounded-circle">
                            <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                <i class="ti ti-moon moon"></i>
                            </a>
                            <a class="nav-link sun light-layout" href="javascript:void(0)">
                                <i class="ti ti-sun sun"></i>
                            </a>
                        </li>
                        <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                            <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                            <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                    <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                    <span class="badge text-bg-primary rounded-2 px-3 py-1 lh-sm">5 new</span>
                                </div>
                                <div class="message-body" data-simplebar>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">Roman Joined the Team!</h6>
                                            <span class="fs-3 d-block text-body-secondary">Congratulate him</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">New message</h6>
                                            <span class="fs-3 d-block text-body-secondary">Salma sent you new message</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">Bianca sent payment</h6>
                                            <span class="fs-3 d-block text-body-secondary">Check your earnings</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">Jolly completed tasks</h6>
                                            <span class="fs-3 d-block text-body-secondary">Assign her new tasks</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-6.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">John received payment</h6>
                                            <span class="fs-3 d-block text-body-secondary">$230 deducted from account</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="../assets/images/profile/user-7.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-0 fs-4 lh-base">Roman Joined the Team!</h6>
                                            <span class="fs-3 d-block text-body-secondary">Congratulate him</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="py-6 px-7 mb-1">
                                    <button class="btn btn-outline-primary w-100">See All Notifications</button>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                <div class="d-flex align-items-center gap-2 border-start ps-3">
                                    <div class="user-profile-img">
                                        <img src="{{ asset('src/img/user/' . auth()->user()->avatar . '') }}" class="rounded-circle" width="35" height="35" alt="flexy-img" />
                                    </div>
                                    <div class="d-none d-md-flex align-items-center">
                                        <h5 class="mb-0 fs-4">Hai,</h5>
                                        <h5 class="mb-0 fs-4 fw-semibold ms-1">Johnathan</h5>
                                        <i class="ti ti-chevron-down"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                <div class="profile-dropdown position-relative" data-simplebar>
                                    <div class="py-3 px-7 pb-0">
                                        <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                    </div>
                                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                        <img src="{{ asset('src/img/user/' . auth()->user()->avatar . '') }}" class="rounded-circle" width="80" height="80" alt="flexy-img" />
                                        <div class="ms-3">
                                            <h5 class="mb-1 fs-4">{{ auth()->user()->name }}</h5>
                                            <span class="mb-1 d-block">Administrator</span>
                                            <p class="mb-0 d-flex align-items-center gap-2">
                                                <i class="ti ti-mail fs-4"></i> {{ auth()->user()->email }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="message-body">
                                        <a href="page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center bg-primary-subtle rounded-1 p-6">
                                                <i class="ti ti-currency-dollar fs-6 text-primary"></i>
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-0 fs-4 lh-base">My Profile</h6>
                                                <span class="fs-3 d-block text-body-secondary">Account Settings</span>
                                            </div>
                                        </a>
                                        <a href="app-email.html" class="py-8 px-7 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center bg-success-subtle rounded-1 p-6">
                                                <i class="ti ti-shield fs-6 text-success"></i>
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-0 fs-4 lh-base">My Inbox</h6>
                                                <span class="fs-3 d-block text-body-secondary">Messages & Emails</span>
                                            </div>
                                        </a>
                                        <a href="app-notes.html" class="py-8 px-7 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center bg-danger-subtle rounded-1 p-6">
                                                <i class="ti ti-credit-card fs-6 text-danger"></i>
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-0 fs-4 lh-base">My Task</h6>
                                                <span class="fs-3 d-block text-body-secondary">To-do and Daily Tasks</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-grid py-4 px-7 pt-8">
                                        <div class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-2 p-4 mb-9">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="fs-4 mb-3 fw-semibold">Unlimited Access</h5>
                                                    <button class="btn btn-primary">Upgrade</button>
                                                </div>
                                                <div class="col-6">
                                                    <div class="m-n4 unlimited-img">
                                                        <img src="../assets/images/backgrounds/unlimited-bg.png" alt="flexy-img" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="#" class="btn btn-outline-primary">Keluar</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
