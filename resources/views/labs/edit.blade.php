@extends('master')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">

            <!-- Formularz -->
            	@if(count($errors) > 0)
                   <div class = ".alert alert-danger">
                        <ul>
                           @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                           @endforeach 
                        </ul>
                   </div>
                @endif
            	{!! Form::model($lab, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action' => ['LabsController@update', $lab->id]]) !!}



            		<div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('lab_title', 'Tytuł: ') !!}

                        </div>
                        <div class="col-md-6">
                            {!! Form::text('lab_title', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('lab_description', 'Treść: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::textarea('lab_description', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                       <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('lab_termin', 'Termin: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::date('lab_termin', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                      <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('lab_category', 'Kategoria: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('lab_category', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                       <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('lab_zalacznik', 'Obraz: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('lab_zalacznik', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>


                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Dodaj zadanie', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>

                 {!! Form::close() !!}

            	
            </div>
        </div>
    </div>
</div>

@stop