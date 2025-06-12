<div wire:ignore.self class="modal fade" id="modal_permission_resource" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center pb-0">
                <h4 class="modal-title" id="modal_permission_resource_title">{{ (is_null($permission_id) ? 'Tambah' : 'Edit') }} Izin</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit" method="POST">
                <div class="modal-body">
                    <p>Di sini, Anda dapat {{ (is_null($permission_id) ? 'menambah data' : 'mengubah informasi') }} Izin.</p>

                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="permission_type">Jenis</label>
                        <div class="@error('permission_type') is-invalid @enderror">
                            <select wire:model="permission_type" id="permission_type" class="form-select select2" style="width: 100%;" data-placeholder="Jenis">
                                <option></option>
                                @forelse($types as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        @error('permission_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="permission_menu_id">Menu</label>
                        <div class="@error('permission_menu_id') is-invalid @enderror">
                            <select wire:model="permission_menu_id" id="permission_menu_id" class="form-select select2" style="width: 100%;" data-placeholder="Menu">
                                <option></option>
                                @forelse($menus as $menu)
                                    <option value="{{ $menu['id'] }}">{{ ($menu['member_of'] ? '('.$menu['member_of'].')' : '') }} {{ $menu['title'] }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        @error('permission_menu_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="permission_name">Izin</label>
                        <input type="text" class="form-control @error('permission_name') is-invalid @enderror" wire:model="permission_name" placeholder="Izin" />
                        @error('permission_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="">
                        <label class="form-label" for="permission_number">Urutan</label>
                        <input type="text" class="form-control @error('permission_number') is-invalid @enderror" wire:model="permission_number" placeholder="Urutan" />
                        @error('permission_number')
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
