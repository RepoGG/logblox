@extends('master')
@section('content')


<div class="videos-header card">
    <h2>Zadania</h2>
</div>
                    <div class="row">
    
                        <div class="col-md-6 col-md-offset-4">
                            <a href="/tasks/create" class="btn btn-primary">Nowe zadanie</a>
                        </div>
                    </div>

	@foreach($tasks as $task)
    <!-- Single task -->
    <div class="col-xs-12 col-md-6 col-lg-4 single-video">
        <div class="card">
        
            
            <div class="card-content">
                <a href="{{url('tasks', $task->id)}}">
                    <h4>{{$task->title}}</h4>
                </a>
               
                <span class="upper-label"><p>Termin oddania: </p>{{$task->termin}}</span>
                <span class="upper-label"><p>Dodał: </p>{{$task->user->name}}</span>
                
            </div>
            
        </div>
    </div>

    @endforeach
                
                   

                

</div>

@stop