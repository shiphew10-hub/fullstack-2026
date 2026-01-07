<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\MenuCategory;
use Mary\Traits\Toast;
class MenuCategoryManagement extends Component
{
    use Toast;
    public $name;
    public $is_active;

    public function rules(){
        return [
            'name' => 'required|unique:menu_categories,name|min:4|max:20',
            'is_active' => 'required|boolean',
        ];
    }
    //this is executed immediately when the component is created
    public function mount()
    {
        $this->name = '';
        $this->is_active = true;
    }

    public function saveCategory()
    {
        $this->validate();
        try{
            $category = MenuCategory::create([
            'name' => $this->name,
            'is_active' => $this->is_active,
        ]);
        $this->toast(
            type: 'success',
            title: 'Category created successfully',
        );
        }catch(\Exception $e){
            $this->toast(
                type: 'error',
                title: 'Category creation failed',
            );
        }

    }
    public function render()
    {
        return view('livewire.admin.menu-category-management');
    }
}
