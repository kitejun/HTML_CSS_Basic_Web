<?php
Route::get('/', function () {
    return view('home');
});

Route::get('css_basic', function () {
    return view('css_basic');
});

Route::get('many_select', function () {
    return view('many_select');
});

Route::get('sm_select', function () {
    return view('sm_select');
});

Route::get('pseudo', function () {
    return view('pseudo');
});

Route::get('length_color', function () {
    return view('length_color');
});

Route::get('font', function () {
    return view('font');
});

Route::get('box', function () {
    return view('box');
});

Route::get('position', function () {
    return view('position');
});

Route::get('flexbox', function () {
    return view('flexbox');
});

Route::get('final_flexbox', function () {
    return view('final_flexbox');
});