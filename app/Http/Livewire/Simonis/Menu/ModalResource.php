<?php

namespace App\Http\Livewire\Simonis\Menu;

use Livewire\Component;
use App\Models\System\Menu;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class ModalResource extends Component
{
    use LivewireAlert;

    public $menus = [];
    public $menu_id, $menu_title, $menu_icon, $menu_url, $menu_source, $menu_order_number, $menu_parent, $menu_member_of;

    protected $listeners = [
        'set_menu' => 'set_menu',
        'set_menu_field' => 'set_menu_field',
        'ask_to_delete_menu' => 'ask_to_delete_menu',
        'delete_menu' => 'delete_menu',
        'reset_menu' => 'reset_menu',
    ];

    protected $rules = [
        'menu_title' => 'required',
        'menu_icon' => 'required',
        'menu_url' => 'required',
        'menu_source' => 'required',
        'menu_order_number' => 'required',
        'menu_parent' => 'nullable',
        'menu_member_of' => 'nullable',
    ];

    protected $validationAttributes = [
        'menu_title' => 'Judul',
        'menu_icon' => 'Ikon',
        'menu_url' => 'Url',
        'menu_source' => 'Sumber',
        'menu_order_number' => 'Urutan',
        'menu_parent' => 'Turunan Dari',
        'menu_member_of' => 'Kelompok Dari',
    ];

    public function hydrate()
    {
        $this->dispatchBrowserEvent('render-select2');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function reset_menu()
    {
        $this->reset(['menu_id', 'menu_title', 'menu_icon', 'menu_url', 'menu_source', 'menu_order_number', 'menu_parent', 'menu_member_of']);
    }

    public function set_menu($menu_id)
    {
        $this->reset(['menu_id', 'menu_title', 'menu_icon', 'menu_url', 'menu_source', 'menu_order_number', 'menu_parent', 'menu_member_of']);
        $this->menu_id = $menu_id;
        $menu = Menu::find($this->menu_id);

        $this->menu_title = $menu->title;
        $this->menu_icon = $menu->icon;
        $this->menu_url = $menu->url;
        $this->menu_source = $menu->source;
        $this->menu_order_number = $menu->order_number;
        $this->menu_parent = $menu->parent;
        $this->menu_member_of = $menu->member_of;
    }

    public function set_menu_field($field, $value)
    {
        $this->$field = $value;
    }

    public function submit()
    {
        $this->validate();

        if(is_null($this->menu_id)) {
            $menu = Menu::create([
                'title' => $this->menu_title,
                'icon' => $this->menu_icon,
                'url' => $this->menu_url,
                'source' => $this->menu_source,
                'order_number' => $this->menu_order_number,
                'parent' => $this->menu_parent,
                'member_of' => $this->menu_member_of,
            ]);
        } else {
            $menu = Menu::findOrFail($this->menu_id);

            $menu->update([
                'title' => $this->menu_title,
                'icon' => $this->menu_icon,
                'url' => $this->menu_url,
                'source' => $this->menu_source,
                'order_number' => $this->menu_order_number,
                'parent' => $this->menu_parent,
                'member_of' => $this->menu_member_of,
            ]);
        }

        $this->emit('close_modal_resource');
        $this->emit('menu_table_reload');

        $this->alert('success', 'Berhasil '.(is_null($this->menu_id) ? 'menambah' : 'mengubah').' Menu', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);

        $this->reset(['menu_id', 'menu_title', 'menu_icon', 'menu_url', 'menu_source', 'menu_order_number', 'menu_parent', 'menu_member_of']);
    }

    public function ask_to_delete_menu($menu_id)
    {
        $this->menu_id = $menu_id;
        $menu = Menu::findOrFail($this->menu_id);
        $this->alert('question', 'Peringatan', [
            'position' => 'center',
            'timer' => null,
            'toast' => false,
            'text' => 'Perintah ini akan menghapus menu dengan judul '.$menu->title.', Anda yakin ingin melanjutkan?',
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'confirmButtonText' => 'Lanjutkan',
            'cancelButtonText' => 'Batalkan',
            'onConfirmed' => 'delete_menu',
        ]);
    }

    public function delete_menu()
    {
        $announcement = Menu::findOrFail($this->announcement_id);

        if($announcement) {
            $announcement->delete();

            $this->alert('success', '', [
                'text' => 'Berhasil menghapus menu',
                'position' => 'bottom-end',
                'timer' => 3000,
                'toast' => true,
            ]);

            $this->reset(['menu_id', 'menu_title', 'menu_icon', 'menu_url', 'menu_source', 'menu_order_number', 'menu_parent', 'menu_member_of']);

            $this->emit('menu_table_reload');
        }
    }

    public function mount()
    {
        $this->menus = Menu::orderBy('order_number')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.simonis.menu.modal-resource');
    }
}
