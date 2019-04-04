@extends('master')
@section('content')
<div class="col-xs-12 videos-header card">
    <h2>{{ $task->title }}</h2>
</div>

<div class="row">

    <!-- left col. -->
    <div class="col-xs-12 col-md-9 single-video-left">

        <div class="card">

            
        
            <div class="single-video-content">
                <div class="categories">
                    <h4>Kategoria</h4>
                    <span>
                    {{ $task->category }}
                    </span>
                    <h4>Dodał: </h4>{{ $task->user->name }}
                </div>
                <h4>Treść zadania </h4>
                <p>{{ $task->description }}</p>
                 
                
                <img src={{$content}}{{ $task->zalacznik }}  width="800" height="500" >
                

                <div class="edit-button">
                    <a href="/tasks/{{ $task->id }}/edit"><button class="btn btn-primary btn-lg">
                        Edytuj
                    </button></a>
                </div>
            </div>
            
        </div>
        
    </div>

   

    </div>

</div>
@stop