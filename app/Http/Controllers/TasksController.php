<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{

	/**
	* Pobieramy listę zadań
	**/
    public function index(){
    	$tasks = Task::get();
    	return view('tasks.index')->with('tasks',$tasks);
    }
}
