<?php

namespace App\Http\Livewire\Simonis\Authorization;

use App\Models\SLP\Role;
use Livewire\Component;

class RoleContainer extends Component
{
    public $roles;

    protected $listeners = [
        're_render_role_container' => 're_render_role_container',
    ];

    public function re_render_role_container()
    {
        $this->mount();
        $this->render();
    }

    public function mount()
    {
        $this->roles = (auth()->user()->getRoleNames()->first() == 'Developer' ? Role::withCount('users')->orderBy('name')->get() : Role::where('name', '!=', 'Developer')->orderBy('name')->withCount('users')->get());
    }

    public function render()
    {
        return view('livewire.simonis.authorization.role-container');
    }
}
