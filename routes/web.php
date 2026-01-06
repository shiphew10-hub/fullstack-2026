<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/menu-category-management', \App\Livewire\Admin\MenuCategoryManagement::class)->name('admin.menu-category-management');