<?php

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

/*
Rutas menu var
*/

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