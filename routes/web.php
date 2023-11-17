<?php

use App\Http\Controllers\Auth\AuthenticationSessionController;
use App\Http\Controllers\Auth\RegisterdUserSessionController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\DevengadoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NominaEmpleadoController;
use App\Http\Controllers\LogNominaEmpleadoController;
use App\Http\Controllers\SueldoController;
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
}) -> name('home');//->middleware('auth');
//--------------------------------------
//Route::get('', function () {

//ROUTES FINALES
//Route::get('/',[IndexController::class, 'index'])->name('index');
//----------------Resources---------------

Route::resource('accrued',DevengadoController::class);
Route::resource('discount',DescuentoController::class);
Route::resource('department',DepartamentoController::class);
Route::resource('employee',EmpleadoController::class);
Route::resource('payroll',SueldoController::class);

Route::get('/PayrollPartial', function () {
    return view('configuration.employee.EmployeePayrollPartial');
}) -> name('PayrollPartial');


/*
Route::get('/login', [AuthenticationSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticationSessionController::class, 'store'])->name('start');
Route::post('/logout', [AuthenticationSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisterdUserSessionController::class, 'create'])->name('register');
Route::post('/register', [RegisterdUserSessionController::class, 'store'])->name('save');
*/
/*
->middleware('auth')
->middleware('auth')
->middleware('auth')
->middleware('auth')
->middleware('auth')*/