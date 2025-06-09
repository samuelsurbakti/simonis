<?php

namespace App\Models\SLP;

use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends SpatieRole
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'uuid';

    // public function get_menu()
    // {
    //     return $this->hasMany(RoleMenu::class, 'role_id', 'uuid');
    // }
}
