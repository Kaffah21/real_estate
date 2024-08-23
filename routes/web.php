<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\PropertyController;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/rumah', [App\Http\Controllers\RumahController::class, 'index'])->name('rumah');

Route::get('/villa', [App\Http\Controllers\VillaController::class, 'index'])->name('villa');

// Route::resource('promos', PromoController::class);
// Route::resource('properties', PropertyController::class);

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('login.google');

Route::get('/auth/google/callback', function () {
    $user = Socialite::driver('google')->stateless()->user();

    $existingUser = User::where('email', $user->getEmail())->first();

    if ($existingUser) {
        Auth::login($existingUser);
    } else {
        $newUser = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'google_id' => $user->getId(),
            'avatar' => $user->getAvatar(),
        ]);

        Auth::login($newUser);
    }

    return redirect('/welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');



require __DIR__.'/auth.php';

// Route::middleware(['auth', 'UserMiddleware'])->group(function () {

//      Route::get('dashboard', [UserController::class,'index'])->name('dashboard');

// });


Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        // Rute ini hanya dapat diakses oleh pengguna dengan 'admin' usertype
    });
});
//
