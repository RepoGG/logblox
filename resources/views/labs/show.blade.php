@extends('master')
@section('content')
<div class="col-xs-12 videos-header card">
    <h2>{{ $lab->lab_title }}</h2>
</div>

<div class="row">

    <!-- left col. -->
    <div class="col-xs-12 col-md-9 single-video-left">

        <div class="card">

            
        
            <div class="single-video-content">
                <div class="categories">
                    <h4>Kategoria</h4>
                    <span>
                    {{ $lab->lab_category }}
                    </span>
                </div>
                <h4>Treść zadania </h4>
                <p>{{ $lab->lab_description }}</p>
                 
                
                <img src={{$content}}{{ $lab->lab_zalacznik }}  width="800" height="500" >
                

                <div class="edit-button">
                    <a href="/labs/{{ $lab->id }}/edit"><button class="btn btn-primary btn-lg">
                        Edytuj
                    </button></a>
                </div>
            </div>
            
        </div>
        
    </div>

   

    </div>

</div>
@stop