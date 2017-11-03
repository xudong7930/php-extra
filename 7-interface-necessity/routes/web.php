<?php
Route::get('/', function() {
    return view('welcome');
});

Route::get('/lesson', function() {
    $lessons = App\Lesson::all();
    return view('lesson.index', compact('lessons'));
});

Route::get('/epsido', function() {
    $epsidos = App\Epsido::all();
    return view('epsido.index', compact('epsidos'));
});
