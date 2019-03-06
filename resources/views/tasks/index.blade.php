@extends('master')
@section('content')


<div class="videos-header card">
    <h2>Zadania</h2>
</div>
<div class="row">


	@foreach($tasks as $task)
    <!-- Single task -->
    <div class="col-xs-12 col-md-6 col-lg-4 single-video">
        <div class="card">
        
            
            <div class="card-content">
                <a href="single_video.html">
                    <h4>{{$task->title}}</h4>
                </a>
                <p>{{$task->description}}</p>
                <span class="upper-label">Dodał</span>
                <span class="video-author">Strefa Kursów</span>
            </div>
            
        </div>
    </div>

    @endforeach

</div>

@stop