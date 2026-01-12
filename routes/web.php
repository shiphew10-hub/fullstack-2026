<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\MenuItemManagement;
use App\Livewire\Admin\MenuCategoryManagement;
use App\Livewire\Welcome;

Route::get('/', Welcome::class)->name('welcome');
Route::get('/admin/menu-category-management', MenuCategoryManagement::class)->name('admin.menu-category-management');
Route::get('/admin/menu-item-management', MenuItemManagement::class)->name('admin.menu-item-management');