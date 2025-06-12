<div class="row row-gap-4 mb-4">
    @foreach($roles as $role)
        @livewire('simonis.authorization.role-list', ['role' => $role], key('role-'.$role->uuid))
    @endforeach

    @can('[Manajemen Sistem] Hak Akses - Menambah Peran')
        <div class="col-sm-6 col-lg-4">
            <div class="card h-100 mb-0">
                <div class="card-body p-4">
                    <h4 class="card-title">Butuh peran tambahan?</h4>
                    <div class="d-flex align-items-center justify-content-between gap-4 mb-4">
                        <p class="mb-0">Segera tambahkan melalui tombol dibawah ini.</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button id="btn_role_create" class="btn bg-primary-subtle text-primary" data-bs-toggle="modal" data-bs-target="#modal_role_resource">Tambah Peran</button>
                    </div>
                </div>
            </div>
        </div>
    @endcan
</div>
