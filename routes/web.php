<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\KuponController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use App\Models\Kupon;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\Auth\GoogleController;
use Laravel\Socialite\Facades\Socialite;

require __DIR__ . '/auth.php';
Route::get('/', function () {
    return view('app');
});
Route::resource('users', UserController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);
Route::resource('kupon', KuponController::class);
Route::resource('role', RoleController::class);
Route::resource('order', OrderController::class);
Route::get('/riwayat', [DashboardController::class, 'riwayat'])->name('riwayat');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
// Route::put('/admin/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
Route::put('order/{order}/update-status', [OrderController::class, 'updateStatus'])->name('order.updateStatus');

Route::get('/riwayat', [DashboardController::class, 'riwayat'])->name('riwayat');
Route::get('/check-kupon', function (Request $request) {
    try {
        $kupon = Kupon::where('kode', $request->query('kode'))->first();
        if ($kupon) {
            return response()->json(['valid' => true, 'diskon' => $kupon->diskon]);
        }
        return response()->json(['valid' => false]);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Terjadi kesalahan saat memeriksa kupon'], 500);
    }
});
// Halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Proses login
Route::post('/login', [AuthController::class, 'login']);
// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/dashboard-user', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard-user', [AuthController::class, 'dashboard'])->name('dashboard-user');
// Route::get('/dashboard-user', [AuthController::class, 'dashboard'])->name('dashboard');

// Route untuk Mobile Legends
Route::get('/game/ml', [GameController::class, 'ml'])->name('game.ml');

// Route untuk Free Fire
Route::get('/game/ff', [GameController::class, 'ff'])->name('game.ff');

// Route untuk PUBG
Route::get('/game/pubg', [GameController::class, 'pubg'])->name('game.pubg');

Route::get('/game/hok', [GameController::class, 'hok'])->name('game.hok');

// Route untuk Free Fire
Route::get('/game/genshin', [GameController::class, 'genshin'])->name('game.genshin');

// Route untuk PUBG
Route::get('/game/bola', [GameController::class, 'bola'])->name('game.bola');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/toggle-dark-mode', [DarkModeController::class, 'toggleDarkMode'])->middleware('auth');

Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
// Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback'])
    ->middleware('web')
    ->name('google.callback');


    Route::get('/search', [ProdukController::class, 'search']);


=======
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardUserController;

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
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/', [GuestDashboardController::class, 'index'])->name('guest.dashboard');
// Untuk Admin
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
});
// Untuk User


Route::middleware(['auth'])->group(function () {
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
    Route::get('user/dashboard', [DashboardUserController::class, 'index'])->name('user.dashboard');
});
>>>>>>> 240b5a1064a946fadec0837b313c365e320f4739
