<?php

namespace App\Modules\Task\Controllers;

use App\Http\Controllers\Controller;

class TaskController extends Controller {

	public function index() {

		return view('Task::index');

	}

}