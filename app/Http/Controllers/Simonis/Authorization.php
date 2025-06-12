<?php

namespace App\Http\Controllers\Simonis;

use App\Models\SLP\Role;
use Illuminate\Http\Request;
use App\Helpers\GeneralHelper;
use App\Models\SLP\Permission;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class Authorization extends Controller
{
    private array $roleColors = [];

    public function index()
    {
        $roles = Role::where('name', '!=', 'Developer')->orderBy('name')->withCount(['users' => function($query){
            $query->where('name', '!=', 'Sammy');
        }])->get();

        return view('simonis.authorization.index', compact('roles'));
    }

    private function getRoleColor(string $roleName): string
    {
        // Jika roleColors belum memiliki warna untuk role ini, generate dan simpan
        if (!isset($this->roleColors[$roleName])) {
            $this->roleColors[$roleName] = GeneralHelper::generateDarkHexColor();
        }
        // Kembalikan warna yang sudah disimpan
        return $this->roleColors[$roleName];
    }

    public function permission_dt()
    {
        $data = Permission::select(['slp_permissions.*', 'sys_menus.title as menu'])
        ->leftJoin('sys_menus', 'slp_permissions.menu_id', '=', 'sys_menus.id')
        ->orderBy('sys_menus.order_number', 'asc')
        ->orderBy('slp_permissions.type', 'desc')
        ->orderBy('slp_permissions.number', 'asc');

        return DataTables::eloquent($data)
            ->addColumn('role', function ($data) {
                $role_list = '<span class="d-flex flex-wrap">';

                foreach ($data->roles->pluck('name') as $role) {
                    $bgColor = $this->getRoleColor($role);
                    $role_list .= '<span class="m-1 badge" style="background-color: ' . $bgColor . '; color: #FFFFFF;">'.$role.'</span>';
                }

                $role_list .= '</span>';

                return $role_list;
            })
            ->addColumn('action', function ($data) {
                $action_button = '';

                if(auth()->user()->can('[Manajemen Sistem] Hak Akses - Mengubah Izin')) {
                    $action_button .= '<button class="btn btn-success btn-sm btn-icon btn_permission_edit" data-bs-toggle="modal" data-bs-target="#modal_permission_resource" value="'.$data->uuid.'"><i class="ti ti-edit fs-5"></i></button>';
                }

                return $action_button;
            })
            ->escapeColumns([])
            ->make(true);
    }
}
