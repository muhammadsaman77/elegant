<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/customer-dashboard', function () {
    $data = [
        [
            'image_url' => "https://i.pinimg.com/736x/8e/e9/04/8ee9049851e083d2e08e01deae76d443.jpg",

        ],
    ];
    return view('customer_dashboard');

});

Route::get('/admin-dashboard', function () {
    return view('admin_dashboard');
});

Route::get('/select-activity', function () {
    return view('select_activity');
});

Route::get('/select-date', function () {
    return view('select_date');
});

Route::get('/select-time', function () {
    return view('select_time');
});

Route::get('/booking-summary', function () {
    return view('booking-summary');
});
