<?php

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
}) -> name('home');
//--------------------------------------
//Route::get('', function () {

//ROUTES FINALES
//Route::get('/',[IndexController::class, 'index'])->name('index');
//----------------Resources---------------

Route::resource('accrued',DevengadoController::class);
Route::resource('discount',DescuentoController::class);
Route::resource('department',DepartamentoController::class);
Route::resource('employee',EmpleadoController::class);

Route::get('/accrued',[DevengadoController::class,'index'])->name('accrued');

Route::get('/accruedCreate',[DevengadoController::class, 'create']) -> name('accruedCreate');
//Route::get('/departmentCreate',[DepartamentoController::class, 'create']) -> name('departmentCreate');
Route::get('/employeeCreate',[EmpleadoController::class, 'create']) -> name('employeeCreate');

Route::get('/discount',[DescuentoController::class,'index'])->name('discount');
Route::get('/department',[DepartamentoController::class,'index'])->name('department');
Route::get('/employee',[EmpleadoController::class,'index'])->name('employee');
Route::get('/payrollPartial',[NominaEmpleadoController::class,'create'])->name('payrollPartial');
Route::get('/payroll',[NominaEmpleadoController::class,'index'])->name('payroll');

//--------------------------------------
/*
Rutas menu var
*/
/*
//Routes Devengado
Route::get('/accruedList', function () {
    return view('configuration.accrued.ConfigurationAccrued');
}) -> name('accruedList');

Route::get('/accruedCreate', function () {
    return view('configuration.accrued.ConfigurationCreate');
}) -> name('accruedCreate');

Route::get('/accruedUpdate', function () {
    return view('configuration.accrued.ConfigurationAccruedUpdating');
}) -> name('accruedUpdate');



//Routes Descuento
Route::get('/discountList', function () {
    return view('configuration.discount.ConfigurationDiscount');
}) -> name('discountList');

//Routes departamentos
Route::get('/departmentList', function () {
    return view('configuration.department.DepartmentList');
}) -> name('departmentList');

Route::get('/departmentCreate', function () {
    return view('configuration.department.DepartmentCreate');
}) -> name('departmentCreate');

Route::get('/departmentUpdate', function () {
    return view('configuration.department.DepartmentUpdating');
}) -> name('departmentUpdate');


//Routes Empleado TODO
Route::get('/employeeList', function () {
    return view('configuration.employee.EmployeeList');
}) -> name('employeeList');


Route::get('/payrollPartial', function () {
    return view('configuration.employee.EmployeePayrollPartial');
}) -> name('payrollPartial');

Route::get('/employeePayroll', function () {
    return view('configuration.employee.EmployeePayroll');
}) -> name('employeePayroll');

//------------------//--------------------------------//------------

Route::get('/employeeCreate', function () {
    return view('configuration.employee.EmployeeCreate');
}) -> name('employeeCreate');


Route::get('/employeePayrollUpdating', function () {
    return view('configuration.employee.EmployeePayrollUpdating');
}) -> name('employeePayrollUpdating');

Route::get('/employeeUpdate', function () {
    return view('configuration.employee.EmployeeUpdating');
}) -> name('employeeUpdating');
*/