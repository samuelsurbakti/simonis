<aside class="left-sidebar with-vertical">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('Simonis | Home') }}" class="text-nowrap logo-img">
                <img style="height: 31px;" src="{{ asset('src/assets/logo/logo-dark.svg') }}" class="dark-logo ps-1" alt="Logo-Dark" />
                <img style="height: 31px;" src="{{ asset('src/assets/logo/logo-light.svg') }}" class="light-logo ps-1" alt="Logo-light" />
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                <i class="ti ti-x"></i>
            </a>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                @php
                    $part = '';
                @endphp

                @foreach ($menus as $menu)
                    @if($part != $menu->member_of)
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">{{ $menu->member_of }}</span>
                        </li>
                        @php
                            $part = $menu->member_of;
                        @endphp
                    @endif

                    <li class="sidebar-item">
                        <a class="sidebar-link {{ ($menu->source == explode('\\', $controller)[0] ? 'active' : '') }} {{ ($menu->get_child->count() != 0 ? 'has-arrow' : '') }}" href="{{ ($menu->get_child->count() != 0 ? 'javascript:void(0);' : config('app.pa_url').'/'.$menu->url) }}" aria-expanded="false">
                            <span><i class="{{ $menu->icon }}"></i></span>
                            <span class="hide-menu">{{ $menu->title }}</span>
                        </a>
                        @if($menu->get_child->count() != 0)
                            <ul aria-expanded="false" class="collapse first-level">
                                @foreach ($menu->get_child as $child)
                                    <li class="sidebar-item">
                                        <a href="{{ config('app.pa_url').'/'.$menu->url.'/'.$child->url }}" class="sidebar-link">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-circle"></i>
                                            </div>
                                            <span class="hide-menu">{{ $child->title }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
