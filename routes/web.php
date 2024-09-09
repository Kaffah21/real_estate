<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\PropertyController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JoinCompanyController;
use App\Http\Controllers\Admin\RumahController;
use App\Http\Controllers\Admin\VillaController;





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


Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/rumah', function () {
    return view('rumah');
})->name('rumah');

Route::get('/villa', function () {
    return view('villa');
})->name('villa');

Route::get('bergabung', function(){
    return view('bergabung');
})->name('bergabung');

Route::get('/join', [JoinCompanyController::class, 'showForm'])->name('join.form');
Route::post('/join', [JoinCompanyController::class, 'submitForm'])->name('join.submit');
});
// Route::get('/villa', [App\Http\Controllers\VillaController::class, 'index'])->name('villa');

// Route::resource('promos', PromoController::class);
Route::resource('properties', PropertyController::class);

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('login.google');

Route::get('/auth/google/caIIback', function () {
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

    return redirect('/dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');



require __DIR__.'/auth.php';

// Route::middleware(['auth', 'UserMiddleware'])->group(function () {

//      Route::get('dashboard', [UserController::class,'index'])->name('dashboard');

// });
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

//Route admin
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        // Rute ini hanya dapat diakses oleh pengguna dengan 'admin' usertype
    });
});
//
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('properties', [AdminController::class, 'showProperties'])->name('properties');
    Route::get('/admin/villas', [VillaController::class, 'index'])->name('admin.villas');

});

// menambahkan crud rumah//

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('rumah', RumahController::class);
});
