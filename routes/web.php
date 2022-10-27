<?php

use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Event;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cms\RoleController;
use App\Http\Controllers\Cms\EventController;
use App\Http\Controllers\Cms\ThemeController;
use App\Http\Controllers\Cms\ServiceController;
use App\Http\Controllers\Ums\ProfileController;
use App\Http\Controllers\Cms\EmployeeController;
use App\Http\Controllers\Ums\ManagerToolsController;
use App\Http\Controllers\Ums\CustomerToolsController;
use App\Http\Controllers\Ums\EmployeeToolsController;
use App\Http\Controllers\Cms\MessageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$reviews = Event::where('status', 'Completed & Feedback Given')->orderBy('created_at', 'desc')->limit(5)->get();
    return view('frontend.index', compact('reviews'));
});

Route::get('/services', function () {
	$serviceTypes = ServiceType::all();
	$services = Service::all();
    return view('frontend.services', compact('services', 'serviceTypes'));
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/terms-of-use', function () {
    return view('frontend.tou');
});
Route::get('/privacy-policy', function () {
    return view('frontend.privacy');
});
Route::get('/dashboard', function () {
	if(Auth::user() == null){
		return redirect('login');
	}

    if (Auth::user()->role == "Manager") {
		$home = 'manager/dashboard';
	} elseif (Auth::user()->role == "Employee") {
		$home = config('fortify.empl');
	} elseif (Auth::user()->role == "Customer") {
		$home = config('fortify.user');
	}else{
		$home = 'login';
	}
	return redirect($home);
})->name('dashboard');




// Route::get('/generate-role', [RoleController::class, 'generate_role'])->name('generate.role');

Route::middleware(['auth:sanctum','verified'])->group(function () {
	Route::post('/save-theme', [ThemeController::class, 'select_theme'])->name('select.theme');

	Route::post('/save/basic-info', [ProfileController::class, 'save_basic_info'])->name('save.basic.info');
	Route::post('/save/change-password', [ProfileController::class, 'change_auth_password'])->name('change.auth.password');
		
	// MESSAGE/INBOX SYSTEM
	Route::get('/inbox', [MessageController::class, 'inbox'])->name('inbox');
	Route::get('/contacts', [MessageController::class, 'get'])->name('contacts.get');
	Route::get('/conversation/{id}', [MessageController::class, 'getMessagesFor'])->name('get.messages.for');
	Route::post('/conversation/send', [MessageController::class, 'send'])->name('send.message');
	// SEARCH
	Route::get('/api/find/user', [MessageController::class, 'search'])->name('search');

	Route::group(['prefix' => 'manager'], function(){

		Route::get('/dashboard', [ManagerToolsController::class, 'dashboard'])->name('manager.dashboard');

		Route::get('/all-service-types', [ManagerToolsController::class, 'all_service_types'])->name('all.service.types');
		Route::get('/add-service-type', [ManagerToolsController::class, 'add_service_type'])->name('add.service.type');
		Route::post('/store-service-type', [ManagerToolsController::class, 'store_service_type'])->name('store.service.type');
		Route::get('/service-type/edit/{id}', [ManagerToolsController::class, 'edit_service_type'])->name('edit.service.type');
		Route::post('/service-type/update/{id}', [ManagerToolsController::class, 'update_service_type'])->name('update.service.type');
		Route::post('/service-type/delete/{id}', [ManagerToolsController::class, 'destroy_service_type'])->name('destroy.service.type');

		Route::get('/all-services', [ServiceController::class, 'all_services'])->name('all.services');
		Route::get('/add-new-service', [ServiceController::class, 'add_service'])->name('add.service');
		Route::post('/store-service', [ServiceController::class, 'store_service'])->name('store.service');
		Route::get('/service/edit/{id}', [ServiceController::class, 'edit_service'])->name('edit.service');
		Route::post('/service/update/{id}', [ServiceController::class, 'update_service'])->name('update.service');
		Route::post('/service/delete/{id}', [ServiceController::class, 'destroy_service'])->name('destroy.service');

		Route::get('/all-employees', [EmployeeController::class, 'all_employees'])->name('all.employees');
		Route::get('/add-new-employee', [EmployeeController::class, 'add_employee'])->name('add.employee');
		Route::post('/store-employee', [EmployeeController::class, 'store_employee'])->name('store.employee');
		Route::get('/view-employee/{id}', [EmployeeController::class, 'show_employee'])->name('show.employee');

		Route::get('/events/not-assigned', [ManagerToolsController::class, 'manager_not_assigned'])->name('manager.not.assigned');
		Route::get('/events/ongoing', [ManagerToolsController::class, 'manager_ongoing'])->name('manager.ongoing');
		Route::get('/events/completed', [ManagerToolsController::class, 'manager_completed'])->name('manager.completed');

		Route::get('/theme/add-layout', [ManagerToolsController::class, 'add_theme_layout'])->name('theme.add.layout');
		Route::post('/theme/add-layout', [ManagerToolsController::class, 'store_theme_layout'])->name('theme.store.layout');
		Route::get('/theme/layout-list', [ManagerToolsController::class, 'theme_layout_list'])->name('theme.layout.list');
		Route::post('/theme/layout/delete/{id}', [ManagerToolsController::class, 'theme_layout_delete'])->name('delete.theme.layout');
		Route::get('/theme/add-item', [ManagerToolsController::class, 'add_theme_item'])->name('theme.add.item');
		Route::post('/theme/add-item', [ManagerToolsController::class, 'store_theme_item'])->name('theme.store.item');
		Route::get('/theme/item-list', [ManagerToolsController::class, 'theme_item_list'])->name('theme.item.list');
		Route::post('/theme/item/delete/{id}', [ManagerToolsController::class, 'theme_item_delete'])->name('theme.item.delete');

		Route::post('/event/assign-employee', [ManagerToolsController::class, 'assign_employee'])->name('assign.employee');

	});

	Route::group(['prefix' => 'employee'], function(){
		Route::get('/dashboard', [EmployeeToolsController::class, 'employee_dashboard'])->name('employee.dashboard');
		Route::get('/change-status', [EmployeeToolsController::class, 'change_status'])->name('change.status');

		Route::post('/mark-completed', [EmployeeToolsController::class, 'mark_completed'])->name('mark.completed');

		Route::get('/events/assigned-ongoing', [EmployeeToolsController::class, 'employee_ongoing'])->name('employee.ongoing');
		Route::get('/events/completed', [EmployeeToolsController::class, 'employee_completed'])->name('employee.completed');
		Route::post('/change-status', [EmployeeToolsController::class, 'change_status_store'])->name('change.status.store');

	});

	Route::group(['prefix' => 'customer'], function(){
		Route::get('/dashboard', [CustomerToolsController::class, 'customer_dashboard'])->name('customer.dashboard');
		Route::get('/event/book', [CustomerToolsController::class, 'book_event'])->name('event.book');
		Route::post('/event/create', [CustomerToolsController::class, 'event_create'])->name('event.create');
		Route::get('/event/booked', [CustomerToolsController::class, 'event_booked'])->name('event.booked.customer');
		Route::post('/submit-feedback', [CustomerToolsController::class, 'submit_feedback'])->name('submit.feedback');

		Route::get('/events/not-assigned', [CustomerToolsController::class, 'customer_not_assigned'])->name('customer.not.assigned');
		Route::get('/events/ongoing', [CustomerToolsController::class, 'customer_ongoing'])->name('customer.ongoing');
		Route::get('/events/completed', [CustomerToolsController::class, 'customer_completed'])->name('customer.completed');
	});

	Route::get('/event/list', [EventController::class, 'event_list'])->name('event.available');
	Route::get('/event/view/{id}', [EventController::class, 'event_view'])->name('event.view');


});
