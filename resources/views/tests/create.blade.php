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
            	{!! Form::open(['url'=>'/tests', 'class'=>'form-horizontal']) !!}



            		<div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('tresc_zadania', 'Treść zadania: ') !!}

                        </div>
                        <div class="col-md-6">
                            {!! Form::textarea('tresc_zadania', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                        <div class="form-group">
                        <div  class="col-md-4 control-label">
                            {!! Form::label('kwalifikacja', 'Oznaczenie kwalifikacji: ') !!}

                        </div>
                        <div class="col-md-6">
                            {!! Form::text('kwalifikacja', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('odpowiedz_a', 'Odpowiedz a: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('odpowiedz_a', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                       <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('odpowiedz_b', 'Odpowiedz b: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('odpowiedz_b', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                      <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('odpowiedz_c', 'Odpowiedź c: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('odpowiedz_c', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                       <div class="form-group">
                        <div  class="col-md-4 control-label">
                        	{!! Form::label('odpowiedz_d', 'Odpowiedź d: ') !!}
                        	
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('odpowiedz_d', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div  class="col-md-4 control-label">
                            {!! Form::label('poprawna_odpowiedz', 'Poprawna odpowiedź: ') !!}
                            
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('poprawna_odpowiedz', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                     <div class="form-group">
                        <div  class="col-md-4 control-label">
                            {!! Form::label('testimage', 'Obraz: ') !!}
                            
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('testimage', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>


                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('dodaj', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>

                 {!! Form::close() !!}

            	
            </div>
        </div>
    </div>
</div>

@stop