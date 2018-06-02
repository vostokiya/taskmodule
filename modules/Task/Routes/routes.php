<?php

/*
|--------------------------------------------------------------------------
| Routes for Task
|--------------------------------------------------------------------------
*/

Route::group( [ 'namespace' => 'App\Modules\Task\Controllers', 'as' => 'test.',], function(){
    Route::get('/tasks', ['uses' => 'TaskController@index']);
});
