<?php

namespace CodyMoorhouse\Secretary;

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth']], function() {
    $namespace = 'CodyMoorhouse\\Secretary\\Controllers\\';

    Route::resource('/comments', $namespace . 'CommentsController', [ 'only' => [
        'destroy', 'store', 'update'
    ]]);
    Route::resource('/media', $namespace . 'MediaController', [
        'parameters' => [
            'media' => 'media'
        ],
        'only' => [
            'destroy', 'store', 'update'
        ]
    ]);
    Route::resource('/notes', $namespace . 'NotesController', [ 'only' => [
        'destroy', 'store', 'update'
    ]]);
    Route::resource('/sections', $namespace . 'SectionsController', [ 'only' => [
        'index'
    ]]);
});