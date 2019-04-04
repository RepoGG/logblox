<?php

namespace App\Http\Controllers;


use Request;
use App\Http\Requests\CreateLabRequest;
use Illuminate\Support\Facades\Storage;
use App\Lab;


class LabsController extends Controller
{
    /**
	* Pobieramy listę zadań
	**/
    public function index(){
    	$labs = Lab::get();
    	return view('labs.index')->with('labs',$labs);
    }

    /**
    *jedne zadanie
    **/

    public function show($id){
    	$lab = Lab::findorFail($id);
    	$content  = Storage::url('/');
    	return view('labs.show', compact('lab','content'));
    	
    }

    /**
    *Wyświetla formularz dodawania zadań
    **/
    public function create(){
    	return view('labs.create');
    }

    /**
    *Zapisuje zadania do tabeli
    **/
    public function store(CreateLabRequest $request){
    	Lab::create($request->all());
    	return redirect('labs');
    	
    }

    /**
    *Formularz edycji zadania
    **/
    public function edit($id){
        $lab = Lab::findorFail($id);
        return view('labs.edit')->with('lab', $lab);
    }

    /**
    *Aktualizacja zadania
    **/
    public function update($id, CreateLabRequest $request){
        $lab = Lab::findOrFail($id);
        $lab -> update($request->all());
        return redirect('labs');

    }
}
