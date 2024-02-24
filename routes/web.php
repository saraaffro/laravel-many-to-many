<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProjectController;

Route::get('/', [TypeController :: class, 'index'])
    -> name('type.index');

Route::get('/projects', [ProjectController :: class, 'index'])
    -> name('project.index');

Route::get('/projects/create', [ProjectController :: class, 'create'])
    -> name('project.create');

Route::post('/project/create', [ProjectController :: class, 'store'])
    -> name('project.store');
