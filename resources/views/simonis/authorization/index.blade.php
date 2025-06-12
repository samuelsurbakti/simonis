@extends('layouts.simonis.app')

@section('content')
    @can('[Manajemen Sistem] Hak Akses - Melihat Peran')
        @livewire('simonis.authorization.role-container')
    @endcan

    @can('[Manajemen Sistem] Hak Akses - Melihat Izin')
        <div class="card">
            <div class="px-4 py-3 border-bottom">
                <h4 class="mb-0 card-title">Daftar Izin</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="permission_table" class="table table-striped table-bordered text-nowrap align-middle">
                        <thead>
                            <tr>
                                <th>Jenis</th>
                                <th>Menu</th>
                                <th>Izin</th>
                                <th>Urutan</th>
                                <th>Diberikan Kepada</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    @endcan

    @canany(['[Manajemen Sistem] Hak Akses - Menambah Peran', '[Manajemen Sistem] Hak Akses - Mengubah Peran'])
        @livewire('simonis.authorization.role-modal-resource')
    @endcanany

    @can('[Manajemen Sistem] Hak Akses - Memberi Hak Akses')
        @livewire('simonis.authorization.modal-authorization')
    @endcan

    @canany(['[Manajemen Sistem] Hak Akses - Menambah Izin', '[Manajemen Sistem] Hak Akses - Mengubah Izin'])
        @livewire('simonis.authorization.permission-modal-resource')
    @endcanany
@endsection

@push('page_styles')
    {{-- Datatable --}}
    <link rel="stylesheet" href="{{ asset('theme/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}">

    {{-- Select2 --}}
    <link rel="stylesheet" href="{{ asset('theme/libs/select2/dist/css/select2.min.css') }}">
@endpush

@push('breadcrumbs')
    {{ Breadcrumbs::render('Simonis | Authorization') }}
@endpush

@push('page_scripts')
    {{-- Datatable --}}
    <script src="{{ asset('theme/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    {{-- Select2 --}}
    <script src="{{ asset('theme/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('theme/libs/select2/dist/js/select2.min.js') }}"></script>

    @include('js.simonis.authorization.index')
@endpush

