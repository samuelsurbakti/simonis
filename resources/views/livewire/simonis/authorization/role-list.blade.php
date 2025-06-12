<div class="col-sm-6 col-lg-4">
    <div class="card h-100 mb-0">
        <div class="card-body p-4">
            <h4 class="card-title">{{ $role->name }}</h4>
            <div class="d-flex align-items-center justify-content-between gap-4 mb-4">
                <div class="d-flex align-items-center">
                    @if($role_users_count != 0)
                        @php
                            $no = 1;
                        @endphp
                        @foreach($users as $user)
                            @if($no <= 5)
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('src/img/user/'.$user->avatar) }}" class="rounded-circle me-n2 card-hover border border-white" width="32" height="32" data-bs-toggle="tooltip" title="{{ $user->name }}">
                                </a>
                            @endif
                            @php
                                $no++;
                            @endphp
                        @endforeach
                    @endif
                </div>
                <p class="mb-0">{{ $role_users_count }} akun</p>
            </div>
            <div class="d-flex justify-content-between">
                <button class="btn bg-primary-subtle text-primary btn_authorization" title="{{ $role->name }}" data-bs-toggle="modal" data-bs-target="#modal_authorization" value="{{ $role->uuid }}">Kelola Izin</button>
                <button class="btn bg-success-subtle text-success btn_role_edit" title="{{ $role->name }}" data-bs-toggle="modal" data-bs-target="#modal_role_resource" value="{{ $role->uuid }}">Edit Hak Akses</button>
            </div>
        </div>
    </div>
</div>
