<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//    return view('home');
//});

//Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('task/list/class-room/laravel-20', function () {
    return 'Zent - laravel 20';
})->name('zent');

//Route::post('save', function (){
//   echo 'post';
//});
//
//Route::get('save', function (){
//    echo 'get';
//});

//Route::match(['get', 'post'], 'save', function () {
//    echo route('zent');
//    echo 'get post';
//});
//
//Route::get('user/{id?}', function($i = null) {
//    echo route('zent');
//    return 'User ' . $i;
//});
//
//Route::get('/user/{id}/post/{post}', function($id, $idPost) {
//    return "This is post $idPost of user $id";
//});

// Route group
//Route::prefix('admin')->group(function () {
//
//    Route::prefix('user')->group(function () {
//        Route::get('/edit', function () {
//            echo 'admin/user/edit';
//        });
//        Route::get('/create', function () {
//            echo 'admin/user/create';
//        });
//        Route::get('/list', function () {
//            echo 'admin/user/list';
//        });
//    });
//
//    Route::group([
//        'prefix' => 'class-room',
//    ], function() {
//        Route::get('/ex/1', function (){
//            echo 'admin/class-room/ex/1';
//        });
//
//        Route::get('/ex/1', function (){
//            echo 'admin/class-room/ex/2';
//        });
//
//        Route::get('/ex/1', function (){
//            echo 'admin/class-room/ex/3';
//        });
//    });
//
//    Route::get('class-room/unit/1', function (){
//       echo 'admin/class-room/unit/1';
//    });
//
//    Route::get('class-room/unit/2', function (){
//        echo 'admin/class-room/unit/2';
//    });
//});

// Bài tập
Route::group([
    'prefix' => 'task',
], function () {
   Route::get('/complete/3', function () {
       echo 'task/complete/3';
   })->name('todo.task.complete');

    Route::get('/reset/3', function () {
        echo 'task/reset/3';
    })->name('todo.task.reset');
});
//
//Route::get('/hello1', function (){
//    return view('hello1');
//});
//
//Route::get('/hello2', function (){
//    return view('hello2');
//});
//
Route::group([
    'prefix' => 'tasks'
], function () {
    Route::get('/create', [\App\Http\Controllers\Task\TaskController::class, 'create'])->name('tasks.create');

    Route::get('/edit', [\App\Http\Controllers\Task\TaskController::class, 'edit'])->name('tasks.edit');

    Route::get('/list', [\App\Http\Controllers\Task\TaskController::class, 'list'])->name('tasks.list');
});

//Route::get('/profile', function (){
//
//    return view('profile', [
//        'name' => 'Nguyễn Quang Thành',
//        'birth' => '20 - 01 - 2000',
//        'school' => 'KMA',
//        'home' => 'Hoài Đức - Hà Nội'
//    ]);
//});
//
//Route::get('/list', function (){
//    $list = [
//        [
//            'name' => 'Học View trong Laravel',
//            'status' => 0
//        ],
//        [
//            'name' => 'Học Route trong Laravel',
//            'status' => 1
//        ],
//        [
//            'name' => 'Làm bài tập View trong Laravel',
//            'status' => 2
//        ],
//    ];
//    return view('list', [
//        'list' => $list
//    ]);
//});

Route::get('/', [\App\Http\Controllers\Frontend\TaskController::class, 'index']);

//Route::resource('frontend/task', Frontend\TaskController::class);

Route::group([
    'prefix' => 'frontend/task'
], function () {
    Route::get('/index', [\App\Http\Controllers\Frontend\TaskController::class, 'index'])->name('task.index');

    Route::get('/create', [\App\Http\Controllers\Frontend\TaskController::class, 'create'])->name('task.create');

    Route::post('/store', [\App\Http\Controllers\Frontend\TaskController::class, 'store'])->name('task.store');

    Route::get('/{task?}', [\App\Http\Controllers\Frontend\TaskController::class, 'show'])->name('task.show');

    Route::get('/{task?}/edit', [\App\Http\Controllers\Frontend\TaskController::class, 'edit'])->name('task.edit');

    Route::match(['put', 'patch'], '/{task?}', [\App\Http\Controllers\Frontend\TaskController::class, 'update'])->name('task.update');

    Route::delete('/destroy/{id?}', [\App\Http\Controllers\Frontend\TaskController::class, 'destroy'])->name('task.destroy');

    Route::get('/{id?}/complete', [\App\Http\Controllers\Frontend\TaskController::class, 'complete'])->name('task.complete');

    Route::get('/{id?}/reComplete', [\App\Http\Controllers\Frontend\TaskController::class, 'reComplete'])->name('task.reComplete');
});
