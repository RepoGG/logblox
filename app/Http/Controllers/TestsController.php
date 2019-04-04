<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Requests\CreateTestRequest;
//use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Test;
//use Storage;


class TestsController extends Controller
{
    /**
	* Pobieramy listę testów
	**/
    public function index(){
    	$tests = Test::get();
    	return view('tests.index')->with('tests',$tests);
    }

    /**
    *jedne zadanie
    **/

    public function show($id){
    	$test = Test::findOrFail($id);
    	$content  = Storage::url('public/');

    	
    	return view('tests.show', compact('test','content'));
    	
    }

     /**
    *Wyświetla formularz dodawania zadań
    **/
    public function create(){
        return view('tests.create');
    }

    /**
    *Zapisuje zadania do tabeli
    **/
    public function store(CreateTestRequest $request){
        
        
        Test::create($request->all());
        
        return redirect('tests');
    }

    /**
    *Formularz edycji zadania
    **/
    public function edit($id){
        $test = Test::findorFail($id);
        return view('tests.edit')->with('test', $test);
    }

    /**
    *Aktualizacja zadania
    **/
    public function update($id, CreateTestRequest $request){
        $test = Test::findOrFail($id);
        $test -> update($request->all());
        return redirect('tests');

    }
}
