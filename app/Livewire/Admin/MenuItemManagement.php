<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\MenuCategory;
use App\Models\MenuItem;
use Mary\Traits\Toast;

class MenuItemManagement extends Component
{
    public $showModal = false;
    public $categories = [];
    public $category_id; //stores the selected category
    public $name;
    public $description;
    public $price;
    public $is_active;
    public $headers = [];
    public $searchItem = '';
    use Toast;
    public function mount()
    {
        //select * from menu_categories order by name
        $this->categories = MenuCategory::orderBy('name')
                ->get();
        $this->resetForm();
        $this->headers = [
            ['key' => 'id', 'label' => '#', 'class' => 'bg-purple-500 w-1 text-white'],
            ['key' => 'menu_category_id', 'label' => 'Category'],
            ['key' => 'name', 'label' => 'Menu Item'],
            ['key' => 'price', 'label' => 'Price'],
            ['key' => 'is_active', 'label' => 'Is Active', 'class' => 'hidden lg:table-cell'], // Responsive
        ];
    }
    public function openModal()
    {
        $this->showModal = true;
    }
    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }
    public function resetForm(){
        $this->category_id = null;
        $this->name = null;
        $this->description = null;
        $this->price = null;
        $this->is_active = true;
    }
    public function saveItem(){
        $menuItem = new MenuItem(); //create instance of the class
        $menuItem->name = $this->name;
        $menuItem->description = $this->description;
        $menuItem->price = $this->price;
        $menuItem->is_active = $this->is_active;
        $menuItem->menu_category_id = $this->category_id;
        $menuItem->save();
        $this->toast(
            type: 'success',
            title: 'Item created successfully',
        );
        $this->resetForm();
    }

    public function render()
    {
        //select * from menu_items limit 10 order by name
        $query = MenuItem::orderBy('name');
        
        if ($this->searchItem && strlen($this->searchItem) >= 3) {
            $query->where('name', 'like', '%' . $this->searchItem . '%');
        }
        
        return view('livewire.admin.menu-item-management',
        ['existingItems' => $query->paginate(10)]);
    }
}
