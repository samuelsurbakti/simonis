<?php

namespace App\Http\Controllers\Simonis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Models\System\Menu as SystemMenu;

class Menu extends Controller
{
    public function index()
    {
        return view('simonis.menu.index');
    }

    public function dt()
    {
        $data = SystemMenu::orderBy('sys_menus.order_number', 'asc');

        return DataTables::eloquent($data)
            ->editColumn('icon', function ($data) {
                return '<i class="'.$data->icon.' fs-5"></i>';
            })
            ->addColumn('action', function ($data) {
                $action_button = '';

                if(auth()->user()->can('[Manajemen Sistem] Menu - Mengubah Data')) {
                    $action_button .= '<button class="btn btn-success btn-sm btn-icon btn_edit me-1" data-bs-toggle="modal" data-bs-target="#modal_resource" value="'.$data->id.'"><i class="ti ti-edit fs-5"></i></button>';
                }

                if(auth()->user()->can('[Manajemen Sistem] Menu - Menghapus Data')) {
                    $action_button .= '<button class="btn btn-danger btn-sm btn-icon btn_delete ms-1" value="'.$data->id.'"><i class="ti ti-trash fs-5"></i></button>';
                }

                return $action_button;
            })
            ->escapeColumns([])
            ->make(true);
    }
}
