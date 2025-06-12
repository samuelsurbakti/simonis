<div wire:ignore.self class="modal fade" id="modal_role_resource" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center pb-0">
                <h4 class="modal-title" id="modal_role_resource_title">{{ (is_null($role_id) ? 'Tambah' : 'Edit') }} Peran</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit" method="POST">
                <div class="modal-body">
                    <p>Di sini, Anda dapat {{ (is_null($role_id) ? 'menambah data' : 'mengubah informasi') }} Peran.</p>

                    <div class="">
                        <label for="role_name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('role_name') is-invalid @enderror" wire:model="role_name" placeholder="Nama" />
                        @error('role_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between pt-0">
                    <button type="submit" class="btn bg-primary-subtle text-primary me-sm-3 me-1">Simpan</button>
                    <button type="button" class="btn bg-danger-subtle text-danger waves-effect text-start" data-bs-dismiss="modal">Batalkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
