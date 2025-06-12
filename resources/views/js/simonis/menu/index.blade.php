<script>
    $(document).ready(function () {
        window.livewire.on('close_modal_resource', () => {
            menu_table.ajax.reload();
            var modalElement = document.getElementById('modal_resource');
            var modal = bootstrap.Modal.getInstance(modalElement)
            modal.hide();
        });

        window.livewire.on('menu_table_reload', () => {
            menu_table.ajax.reload();
        });

        var e_select2 = $(".select2");
        e_select2.length && e_select2.each(function () {
            var e_select2 = $(this);
            e_select2.wrap('<div class="position-relative"></div>').select2({
                // placeholder: "Select value",
                allowClear: true,
                dropdownParent: e_select2.parent()
            })
        })

        $('#menu_table thead th').each(function () {
            var title = $(this).text();

            if (title !== '') {
                $(this).html('<label for="small'+title+'" class="form-label">'+title+'</label> <input class="form-control form-control-sm" type="text" placeholder="Cari '+title+'" />');
            } else {
                $(this).html('');
            }
        });

        var menu_table = $('#menu_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": false,
            "ajax": "{{ route('Table | Simonis | Menu') }}",
            lengthMenu: [
                [5, 10, 25, 100, -1],
                [5, 10, 25, 100, "All"]
            ],
            pageLength: 10,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
            },
            dom: '<"row px-4"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"{{ (Auth::user()->can("[Manajemen Sistem] Menu - Menambah Data") ? 'B' : '') }}>>t<"row"<"col-sm-12 col-md-12 d-flex justify-content-center"i>><"row"<"col-sm-12 col-md-12 d-flex justify-content-center"p>>',
            buttons: [{
                text: '<i class="bx bx-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data</span>',
                className: "btn btn-sm btn-primary my-3",
                attr: {
                    "id": "btn_menu_create",
                    "data-bs-toggle": "modal",
                    "data-bs-target": "#modal_resource",
                },
            }],
            columns: [
                {data: 'title', name: 'title'},
                {data: 'icon', name: 'icon'},
                {data: 'url', name: 'url'},
                {data: 'source', name: 'source'},
                {data: 'order_number', name: 'order_number'},
                {data: 'parent', name: 'parent'},
                {data: 'member_of', name: 'member_of'},
                {data: 'action', name: 'action'},
            ],
        });

        menu_table.columns().every(function () {
            var table = this;
            $('input', this.header()).on('keyup change', function () {
                if (table.search() !== this.value) {
                    table.search(this.value).draw();
                }
            });
            $('select', this.header()).on('change', function () {
                if (table.search() !== this.value) {
                    table.search(this.value).draw();
                }
            });
        });

        $(document).on('change', '#menu_parent', function () {
            livewire.emit('set_menu_field', $(this).attr('id'), $(this).val());
        });

        $(document).on('click', '.btn_edit', function () {
            livewire.emit('set_menu', $(this).attr('value'));
        });

        $(document).on('click', '.btn_delete', function () {
            livewire.emit('ask_to_delete_menu', $(this).attr('value'));
        });
    });

    window.addEventListener('render-select2', event => {
        var e_select2 = $(".select2");
        e_select2.length && e_select2.each(function () {
            var e_select2 = $(this);
            e_select2.wrap('<div class="position-relative"></div>').select2({
                // placeholder: "Select value",
                allowClear: true,
                dropdownParent: e_select2.parent()
            })
        })
    })
</script>
