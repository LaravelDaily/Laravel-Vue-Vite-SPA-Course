<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
Route::post('logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy']);

Route::get('test', function () {
    dump(\Illuminate\Support\Facades\Gate::abilities());
    dump(auth()->id());
    foreach (App\Models\Permission::pluck('name') as $permission) {
        dump(
            $permission . ': ' . (bool) auth()->user()->roles()->whereHas('permissions', function($q) use ($permission) {
                $q->where('name', $permission);
            })->exists()
        );
    }
});

Route::view('/{any?}', 'dashboard')
    ->where('any', '.*');
