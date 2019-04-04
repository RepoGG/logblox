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
            	{!! Form::open(['url'=>'/tasks', 'class'=>'form-horizontal']) !!}


                    {!! Form::hidden('user_id', 1) !!}
            		<div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('title', 'Tytuł: ') !!}

                        </div>
                        <div class="col-md-6">
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('description', 'Treść: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                       <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('termin', 'Termin: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::date('termin', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                      <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('category', 'Kategoria: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('category', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                       <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('zalacznik', 'Obraz: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('zalacznik', null, ['class'=>'form-control']) !!}
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