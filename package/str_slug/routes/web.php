<?php

use abedalqader\str_slug\Http\Controllers\slugController as ControllersSlugController;
use Illuminate\Support\Facades\Route;
Route::resource('/slug', ControllersSlugController::class);
