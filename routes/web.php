<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\NodeController;
use App\Http\Controllers\Admin\ReleaseNodeController;
use App\Http\Controllers\Admin\PriceListController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TryItProductController;

use App\Http\Controllers\User\UserController;


// reset password
Route::get('password/reset', [AuthController::class, 'resetPassword'])->name('password.reset'); // show form post mail
Route::post('password/email', [AuthController::class, 'sendMail'])->name('password.send-mail');
Route::get('reset/{code}', [AuthController::class, 'editPassword'])->name('password.edit-password');
Route::post('reset/{code}', [AuthController::class, 'updatePassword'])->name('password.update-password');

// WEB
Route::get('/', [UserController::class, 'index'])->name('web.index');

//User create account
Route::get('register', [UserController::class, 'register'])->name('web.create-user');
Route::post('save-user', [UserController::class, 'saveUser'])->name('web.save-user');


//user login
Route::post('redirect', [UserController::class, 'login'])->name('web.register');
Route::get('logout', [UserController::class, 'logout'])->name('web.logout');


// ADMIN
    // Admin login
Route::get('admin/login', [AuthController::class, 'index'])->name('admin.index');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

    // Admin middleware
Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'], function(){
    // Auth
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Account-Admin
    Route::get('account-admin', [AccountController::class, 'indexAdmin'])->name('admin.account-admin.index');

    // Account-User
    Route::get('account', [AccountController::class, 'index'])->name('admin.account.index');

    Route::get('create-account', [AccountController::class, 'createAccount'])->name('admin.account.create-account');
    Route::post('save-account', [AccountController::class, 'saveAccount'])->name('admin.account.save-account');

    Route::get('edit-account/{id}', [AccountController::class, 'editAccount'])->name('admin.account.edit-account');
    Route::post('update-account/{id}', [AccountController::class, 'updateAccount'])->name('admin.account.update-account');

    Route::get('delete-account/{id}', [AccountController::class, 'deleteAccount'])->name('admin.account.delete-account');

    // Product
    Route::get('product', [ProductController::class, 'index'])->name('admin.product.index');

    Route::get('create-product', [ProductController::class, 'createProduct'])->name('admin.product.create-product');
    Route::post('save-product', [ProductController::class, 'saveProduct'])->name('admin.product.save-product');

    Route::get('edit-product/{id}', [ProductController::class, 'editProduct'])->name('admin.product.edit-product');
    Route::post('update-product/{id}', [productController::class, 'updateProduct'])->name('admin.product.update-product');

    Route::get('delete-product/{id}', [productController::class, 'deleteProduct'])->name('admin.product.delete-product');

    // Category
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category.index');

    Route::get('create-category', [CategoryController::class, 'createCategory'])->name('admin.category.create-category');
    Route::post('save-category', [CategoryController::class, 'saveCategory'])->name('admin.category.save-category');

    Route::get('edit-category/{id}', [CategoryController::class, 'editCategory'])->name('admin.category.edit-category');
    Route::post('update-category/{id}', [CategoryController::class, 'updateCategory'])->name('admin.category.update-category');

    Route::get('delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.category.delete-category');



    //  Node
    Route::get('node', [NodeController::class, 'index'])->name('admin.node.index');

    Route::get('create-node', [NodeController::class, 'createNode'])->name('admin.node.create-node');
    Route::post('save-node', [NodeController::class, 'saveNode'])->name('admin.node.save-node');

    Route::get('edit-node/{id}', [NodeController::class, 'editNode'])->name('admin.node.edit-node');
    Route::post('update-node/{id}', [NodeController::class, 'updateNode'])->name('admin.node.update-node');

    Route::get('delete-node/{id}', [NodeController::class, 'deleteNode'])->name('admin.node.delete-node');

    // Release Node
    Route::get('release-node', [ReleaseNodeController::class, 'index'])->name('admin.release-node.index');

    Route::get('create-release-node', [ReleaseNodeController::class, 'createReleaseNode'])->name('admin.release-node.create-release-node');
    Route::post('save-release-node', [ReleaseNodeController::class, 'saveReleaseNode'])->name('admin.release-node.save-release-node');

    Route::get('edit-release-node/{id}', [ReleaseNodeController::class, 'editReleaseNode'])->name('admin.release-node.edit-release-node');
    Route::post('update-release-node/{id}', [ReleaseNodeController::class, 'updateReleaseNode'])->name('admin.release-node.update-release-node');

    Route::get('delete-release-node/{id}', [ReleaseNodeController::class, 'deleteReleaseNode'])->name('admin.release-node.delete-release-node');


    // Price List
    Route::get('price-list', [PriceListController::class, 'index'])->name('admin.price-list.index');

    Route::get('create-price-list', [PriceListController::class, 'createPriceList'])->name('admin.price-list.create-price-list');
    Route::post('save-price-list', [PriceListController::class, 'savePriceList'])->name('admin.price-list.save-price-list');

    Route::get('edit-price-list/{id}', [PriceListController::class, 'editPriceList'])->name('admin.price-list.edit-price-list');
    Route::post('update-price-list/{id}', [PriceListController::class, 'updatePriceList'])->name('admin.price-list.update-price-list');

    Route::get('delete-price-list/{id}', [PriceListController::class, 'deletePriceList'])->name('admin.price-list.delete-price-list');

    // Contact
    Route::get('contact', [ContactController::class, 'index'])->name('admin.contact.index');

    Route::get('view-contact/{id}', [ContactController::class, 'viewContact'])->name('admin.contact.view-contact');

    Route::get('delete-contact/{id}', [ContactController::class, 'deleteContact'])->name('admin.contact.delete-contact');

    // Try it Product
    Route::get('try-product', [TryItProductController::class, 'index'])->name('admin.try-product.index');

    Route::get('view-try-product/{id}', [TryItProductController::class, 'viewTryProduct'])->name('admin.try-product.view-try-product');

    Route::get('delete-try-product/{id}', [TryItProductController::class, 'deleteTryProduct'])->name('admin.try-product.delete-try-product');

    // Try it Service
    Route::get('try-service', [TryItProductController::class, 'indexService'])->name('admin.try-service.index');


    Route::get('view-try-service/{id}', [TryItProductController::class, 'viewTryService'])->name('admin.try-service.view-try-service');

    Route::get('delete-try-service/{id}', [TryItProductController::class, 'deleteTryService'])->name('admin.try-service.delete-try-service');
});

// Register
Route::post('save-contact', [ContactController::class, 'saveContact'])->name('admin.contact.save-contact');
Route::post('save-try-product', [TryItProductController::class, 'saveTryProduct'])->name('admin.try-product.save-try-product');
