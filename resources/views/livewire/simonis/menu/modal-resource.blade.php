<div wire:ignore.self class="modal fade" id="modal_resource" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center pb-0">
                <h4 class="modal-title" id="modal_resource_title">{{ (is_null($menu_id) ? 'Tambah' : 'Edit') }} Menu</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit" method="POST">
                <div class="modal-body">
                    <p>Di sini, Anda dapat {{ (is_null($menu_id) ? 'menambah data' : 'mengubah informasi') }} Menu.</p>

                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="menu_title">Judul</label>
                        <input type="text" class="form-control @error('menu_title') is-invalid @enderror" wire:model="menu_title" placeholder="Judul" />
                        @error('menu_title')
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="menu_title">{{ $message }}</div>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="menu_icon">Ikon</label>
                        <input type="text" class="form-control @error('menu_icon') is-invalid @enderror" wire:model="menu_icon" placeholder="Ikon" />
                        @error('menu_icon')
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="menu_icon">{{ $message }}</div>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="menu_url">Url</label>
                        <input type="text" class="form-control @error('menu_url') is-invalid @enderror" wire:model="menu_url" placeholder="Url" />
                        @error('menu_url')
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="menu_url">{{ $message }}</div>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="menu_source">Source</label>
                        <input type="text" class="form-control @error('menu_source') is-invalid @enderror" wire:model="menu_source" placeholder="Sumber" />
                        @error('menu_source')
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="menu_source">{{ $message }}</div>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="menu_order_number">Urutan</label>
                        <input type="text" class="form-control @error('menu_order_number') is-invalid @enderror" wire:model="menu_order_number" placeholder="Urutan" />
                        @error('menu_order_number')
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="menu_order_number">{{ $message }}</div>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="menu_parent">Turunan Dari</label>
                        <select class="form-control select2" id="menu_parent" style="width: 100%;" data-placeholder="Turunan Dari">
                            <option></option>
                            @forelse($menus as $menu)
                                <option value="{{ $menu['id'] }}">{{ $menu['title'] }}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('menu_parent')
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="menu_parent">{{ $message }}</div>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="menu_member_of">Kelompok Dari</label>
                        <input type="text" class="form-control @error('menu_member_of') is-invalid @enderror" wire:model="menu_member_of" placeholder="Kelompok Dari" />
                        @error('menu_member_of')
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="menu_member_of">{{ $message }}</div>
                            </div>
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
