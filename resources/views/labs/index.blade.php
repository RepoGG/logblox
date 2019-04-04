@extends('master')
@section('content')


<div class="videos-header card">
    <h2>Laboratorium</h2>
</div>
                    <div class="row">
    
                        <div class="col-md-6 col-md-offset-4">
                            <a href="/labs/create" class="btn btn-primary">Nowe zadanie</a>
                        </div>
                    </div>

	@foreach($labs as $lab)
    <!-- Single task -->
    <div class="col-xs-12 col-md-6 col-lg-4 single-video">
        <div class="card">
        
            
            <div class="card-content">
                <a href="{{url('labs', $lab->id)}}">
                    <h4>{{$lab->lab_title}}</h4>
                </a>
               
                <span class="upper-label"><p>Termin oddania: </p>{{$lab->lab_termin}}</span>
                
            </div>
            
        </div>
    </div>

    @endforeach
                
                   

                

</div>

@stop