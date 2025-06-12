@extends('layouts.simonis.app')

@section('content')
    <div class="card">
        <div class="px-4 py-3 border-bottom">
            <h4 class="mb-0 card-title">Daftar Menu</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="menu_table" class="table table-striped table-bordered text-nowrap align-middle">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Ikon</th>
                            <th>Url</th>
                            <th>Sumber</th>
                            <th>Urutan</th>
                            <th>Turunan Dari</th>
                            <th>Kelompok Dari</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    @canany(['[Manajemen Sistem] Menu - Menambah Data', '[Manajemen Sistem] Menu - Mengubah Data', '[Manajemen Sistem] Menu - Menghapus Data'])
        @livewire('simonis.menu.modal-resource')
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
    {{ Breadcrumbs::render('Simonis | Menu') }}
@endpush

@push('page_scripts')
    {{-- Datatable --}}
    <script src="{{ asset('theme/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    {{-- Select2 --}}
    <script src="{{ asset('theme/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('theme/libs/select2/dist/js/select2.min.js') }}"></script>

    @include('js.simonis.menu.index')
@endpush

