<?php

$menu = [
    [
        'header-name' => '',
        'items' => [
            [
                'id' => 'dashboard',
                'name' => 'Dashboard',
                'target' => 'dashboard',
                'icon' => 'fa-tachometer-alt',
            ],
        ],
    ],
    [
        'header-name' => 'Interface',
        'items' => [
            [
                'id' => 'components',
                'name' => 'Components',
                'target' => '',
                'icon' => 'fa-cog',
                'sub-items' => [
                    [
                        'name' => 'Utilities',
                        'target' => 'dashboard',
                    ],
                ],
            ],
            [
                'id' => 'utilities',
                'name' => 'Utilities',
                'target' => 'dashboard',
                'icon' => 'fa-wrench',
            ],
        ],
    ],
];

?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">{{ env('APP_NAME', '') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @foreach ($menu as $element)
        @if ($element['header-name'] != '')
            <div class="sidebar-heading">
                {{ $element['header-name'] }}
            </div>
        @endif

        @foreach ($element['items'] as $item)
            @if (array_key_exists('sub-items', $item))
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                        data-target="#colapse-{{ $item['id'] }}" aria-expanded="true"
                        aria-controls="collapse-{{ $item['id'] }}">
                        <i class="fas fa-fw {{ $item['icon'] }}"></i>
                        <span>Components</span>
                    </a>
                    <div id="colapse-{{ $item['id'] }}" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            @foreach ($item['sub-items'] as $subitem)
                                <a class="collapse-item" href="{{ $subitem['target'] }}">{{ $subitem['name'] }}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            @else
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ $item['target'] }}">
                        <i class="fas fa-fw {{ $item['icon'] }}"></i>
                        <span>{{ $item['name'] }}</span></a>
                </li>
            @endif
        @endforeach

        @if ($element['header-name'] != '')
            <hr class="sidebar-divider">
        @endif
    @endforeach

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->