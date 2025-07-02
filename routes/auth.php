<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CommentContrller;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\MetaTagsController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('profile',[ProfileController::class,'updateProfile'])->name('profile.store');

    Route::prefix('admin')->group(function () {
        Route::group([
            'prefix' => 'blog',
            'as' => 'blog.'
        ], function () {
            Route::get('/', [BlogController::class, 'index'])->name('index');
            Route::get('/create', [BlogController::class, 'create'])->name('create');
            Route::post('/store', [BlogController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [BlogController::class, 'show'])->name('show');
            Route::get('/get-blog', [BlogController::class, 'getAjaxBlogData'])->name('get-blog');
            Route::put('/update/{id}', [BlogController::class, 'update'])->name('update');
            Route::get('/change-status/{id}', [BlogController::class, 'activation'])->name('change-status');
            Route::delete('/delete/{id}', [BlogController::class, 'destroy'])->name('delete');
        });

        Route::group([
            'prefix' => 'comment',
            'as' => 'comment.'
        ], function () {
            Route::get('/', [CommentContrller::class, 'index'])->name('index');
            Route::get('/edit/{id}', [CommentContrller::class, 'show'])->name('show');
            Route::get('/get-comment', [CommentContrller::class, 'getAjaxCommentData'])->name('get-comment');
        });

        Route::group([
            'prefix' => 'contact-us',
            'as' => 'contact-us.'
        ], function () {
            Route::get('/', [ContactUsController::class, 'index'])->name('index');
            Route::get('/edit/{id}', [ContactUsController::class, 'show'])->name('show');
            Route::get('/get-comment', [ContactUsController::class, 'getAjaxCommentData'])->name('get-comment');
        });

        
            Route::get('meta-tags-create', [MetaTagsController::class, 'index'])->name('meta-tags-create');
            Route::post('save-meta-tags', [MetaTagsController::class, 'store'])->name('save-meta-tags');
            Route::get('meta-tags-list', [MetaTagsController::class, 'list'])->name('meta-tags-list');
            Route::get('meta-tags-edit/{id}', [MetaTagsController::class, 'edit'])->name('meta-tags-edit');
            Route::put('update-meta-tags', [MetaTagsController::class, 'update'])->name('update-meta-tags');
            Route::get('changestatus-meta-tags/{id}', [MetaTagsController::class, 'activation'])->name('changestatus-meta-tags');
            Route::get('meta-tags-delete/{id}', [MetaTagsController::class, 'block'])->name('meta-tags-delete');

        Route::resource('roles', RoleController::class);
        Route::get('roles-list', [RoleController::class, 'index'])->name('roles-list');
        Route::post('new-role',[RoleController::class,'store'])->name('new-role');
        Route::get('roles/create',[RoleController::class,'create'])->name('create-roles');
        Route::get('roles/edit/{id}',[RoleController::class,'edit'])->name('roles-edit');
        Route::put('update-role/{id}', [RoleController::class, 'update'])->name('update-role');
        Route::put('/change-status/{id}', [RoleController::class, 'activation'])->name('change-status');
        Route::get('get-designation-details/{id}', [RoleController::class, 'getDesignation'])->name('get-designation-details');
        Route::delete('delete-role/{id}', [RoleController::class, 'destroy'])->name('delete-role');
        Route::delete('/roles/{role}/remove-user-manual', [RoleController::class, 'removeUserManual'])->name('roles.remove-user-manual');



        //Route::post('/get-designations', [RoleController::class, 'getDesignations'])->name('get-designations');

        Route::resource('users', UserController::class);
        Route::get('users-list',[UserController::class,'index'])->name('users-list');;
        Route::get('create-users',[UserController::class,'create'])->name('create-users');
        Route::post('new-user',[UserController::class,'store'])->name('new-user');
        Route::get('get-users-list',[UserController::class,'getUserList'])->name('get-users-list');
        Route::get('users-edit/{id}',[UserController::class,'edit'])->name('users-edit');
        Route::put('save-user/{id}', [UserController::class, 'update'])->name('save-user');
        Route::get('changestatus-user/{id}', [UserController::class, 'activation'])->name('changestatus-user');
        Route::delete('delete-user/{id}', [UserController::class, 'destroy'])->name('delete-user');
        Route::get('get-role/{officeId}',[UserController::class,'filterRoles'])->name('get-role');
    });



        
});
