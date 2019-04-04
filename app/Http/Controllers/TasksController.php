<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CreateTaskRequest;
use Illuminate\Support\Facades\Storage;
use App\Task;
//use Storage;

class TasksController extends Controller
{

	/**
	* Pobieramy listę zadań
	**/
    public function index(){
    	$tasks = Task::get();
    	return view('tasks.index')->with('tasks',$tasks);
    }

    /**
    *jedne zadanie
    **/

    public function show($id){
    	$task = Task::findorFail($id);
    	$content  = Storage::url('/');
    	return view('tasks.show', compact('task','content'));
    	
    }

    /**
    *Wyświetla formularz dodawania zadań
    **/
    public function create(){
    	return view('tasks.create');
    }

    /**
    *Zapisuje zadania do tabeli
    **/
    public function store(CreateTaskRequest $request){
    	Task::create($request->all());
    	return redirect('tasks');
    	
    }

    /**
    *Formularz edycji zadania
    **/
    public function edit($id){
        $task = Task::findorFail($id);
        return view('tasks.edit')->with('task', $task);
    }

    /**
    *Aktualizacja zadania
    **/
    public function update($id, CreateTaskRequest $request){
        $task = Task::findOrFail($id);
        $task -> update($request->all());
        return redirect('tasks');

    }
}
