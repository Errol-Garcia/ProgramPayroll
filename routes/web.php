<?php

use App\Http\Controllers\Auth\AuthenticationSessionController;
use App\Http\Controllers\Auth\RegisterdUserSessionController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\DevengadoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NominaEmpleadoController;
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

Route::get('/', function () {
    return view('WelcomeAdminView');
}) -> name('home')->middleware('auth');
//--------------------------------------
//Route::get('', function () {

//ROUTES FINALES
//Route::get('/',[IndexController::class, 'index'])->name('index');
//----------------Resources---------------

Route::resource('accrued',DevengadoController::class)->middleware('auth');
Route::resource('discount',DescuentoController::class)->middleware('auth');
Route::resource('department',DepartamentoController::class)->middleware('auth');
Route::resource('employee',EmpleadoController::class)->middleware('auth');
Route::resource('payroll',NominaEmpleadoController::class)->middleware('auth');

//Route::get('/accrued',[DevengadoController::class,'index'])->name('accrued');

//Route::get('/accruedCreate',[DevengadoController::class, 'create']) -> name('accruedCreate');
//Route::get('/departmentCreate',[DepartamentoController::class, 'create']) -> name('departmentCreate');
//Route::get('/employeeCreate',[EmpleadoController::class, 'create']) -> name('employeeCreate');

//Route::get('/discount',[DescuentoController::class,'index'])->name('discount');
//Route::get('/department',[DepartamentoController::class,'index'])->name('department');
//Route::get('/employee',[EmpleadoController::class,'index'])->name('employee');
//Route::get('/payrollPartial',[NominaEmpleadoController::class])->name('payrollPartial');
//Route::get('/payroll',[NominaEmpleadoController::class,'index'])->name('payroll');
//===============sesión

Route::get('/login', [AuthenticationSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticationSessionController::class, 'store'])->name('start');
Route::post('/logout', [AuthenticationSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisterdUserSessionController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('save');