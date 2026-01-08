<div class="max-w-7xl mx-auto p-6">
    <p class="text-2xl font-bold text-pink-800 mb-6">Menu Category Management</p>
    
    <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
        <div class="bg-white rounded-xl shadow-amber-200 shadow-md p-8">
            <h2 class="text-lg font-semibold mb-4">Add New Category</h2>
            <form wire:submit.prevent={{ $isEdit ? 'updateCategory' : 'saveCategory' }} class="space-y-6">
                <x-input 
                    label="Category Name" 
                    wire:model="name" 
                    placeholder="Category Name" 
                />
 
                <x-toggle 
                    label="Is Active" 
                    wire:model="is_active" />
                <div class="flex gap-4">
                <x-button 
                    label="Cancel" 
                    class="btn-secondary" 
                    wire:click="resetForm" 
                    icon="o-x-mark"
                />
                    @if($isEdit)   
                        <x-button 
                            label="Update" 
                            class="btn-secondary" 
                            type="submit" 
                            spinner="save3" 
                            icon="o-pencil"
                        />
                    @else
                        <x-button 
                            label="Save" 
                            class="btn-secondary" 
                            type="submit" 
                            spinner="save3" 
                            icon="o-plus"
                        />
                    @endif
                </div>
            </form>
        </div>

        <div class="bg-white rounded-xl shadow-amber-200 shadow-md p-8">
            <h2 class="text-lg font-semibold mb-4">Existing Categories</h2>
            <x-table :headers="$headers" :rows="$categories->items()">
                @scope('actions', $cat)
                <div class="flex gap-4">
                    <x-button icon="o-pencil" wire:click="edit({{ $cat->id }})" spinner class="btn-sm" />
                    <x-button icon="o-trash" wire:click="delete({{ $cat->id }})" spinner class="btn-sm" />
                </div>
                @endscope
            </x-table>
            <div class="mt-4">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
