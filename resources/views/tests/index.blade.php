@extends('master')
@section('content')


<div class="videos-header card">
    <h2>Testy</h2>
</div>
<div class="row">

 <div class="row">
    
                        <div class="col-md-6 col-md-offset-4">
                            <a href="/tests/create" class="btn btn-primary">Nowy test</a>
                        </div>
                    </div>

	@foreach($tests as $test)
    <!-- Single task -->
    <div class="col-xs-12 col-md-6 col-lg-4 single-video">
        <div class="card">
        
            
            <div class="card-content">
                <a href="{{url('tests', $test->id)}}">
                    <h4>{{$test->tresc_zadania}}</h4>
                </a>
               
                <span class="upper-label"><p>Termin oddania: </p>{{$test->poprawna_odpowiedz}}</span>
                
            </div>
            
        </div>
    </div>

    @endforeach

</div>

@stop