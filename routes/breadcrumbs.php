<?php

use App\Models\System\Menu;
use Diglactic\Breadcrumbs\Breadcrumbs;

// Simonis - Home
Breadcrumbs::for('Simonis | Home', function ($trail) {
    $menu = Menu::where('title', 'Beranda')->first();
    $trail->push($menu->title, route('Simonis | Home'), ['icon' => $menu->icon]);
});

// Simonis - Menu
Breadcrumbs::for('Simonis | Menu', function ($trail) {
    $menu = Menu::where('title', 'Menu')->first();
    $trail->push($menu->title, route('Simonis | Menu'), ['icon' => $menu->icon]);
});

// Simonis - Authorization
Breadcrumbs::for('Simonis | Authorization', function ($trail) {
    $menu = Menu::where('title', 'Hak Akses')->first();
    $trail->push($menu->title, route('Simonis | Authorization'), ['icon' => $menu->icon]);
});
