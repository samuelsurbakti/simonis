<div wire:ignore.self class="modal fade" id="modal_authorization" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center pb-0">
                <h4 class="modal-title" id="modal_authorization_title">Edit Hak Akses</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit" method="POST">
                <div class="modal-body">
                    <p>Di sini, Anda dapat mengelola Hak akses {{ ($role ? $role->name : '') }}</p>

                    @csrf
                    @if ($role)
                        @foreach ($menus as $menu)
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 row">
                                    <hr class="my-2 text-primary">
                                    <div class="col-9 mb-sm-0 mb-2">
                                        <h6 class="mb-0">{{ $menu->title }}</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                        <label class="switch switch-square me-0">
                                            <div class="form-check form-switch">
                                                <input id="menu_{{ $menu->id }}" wire:change="menu_switch('{{ $menu->id }}')" type="checkbox" class="form-check-input cursor-pointer" {{ (in_array($menu->id, $role->get_menu->pluck('menu_id')->toArray()) ? 'checked' : '') }}>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div id="permission_menu_{{ $menu->id }}" {{ (in_array($menu->id, $role->get_menu->pluck('menu_id')->toArray()) ? '' : 'hidden') }}>
                                @foreach ($menu->permissions as $permission)
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0 px-2">
                                        </div>
                                        <div class="flex-grow-1 row">
                                            <hr class="my-2 text-primary">
                                            <div class="col-9 mb-sm-0 mb-2">
                                                <h6 class="mb-0">{{ Str::afterLast($permission->name, ' - ') }}</h6>
                                            </div>
                                            <div class="col-3 text-end">
                                                <label class="switch switch-square me-0">
                                                    <div class="form-check form-switch">
                                                        <input id="permission_{{ Str::replace(' ', '', $permission->name) }}" wire:change="permission_switch('{{ $permission->name }}')" type="checkbox" class="form-check-input cursor-pointer" {{ ($role->hasPermissionTo($permission->name) ? 'checked' : '') }}>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endif
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
