@extends('master')
@section('content')
<div class="col-xs-12 videos-header card">
    <h2>Testy</h2>
</div>

<div class="row">

    <!-- left col. -->
    <div class="col-xs-12 col-md-9 single-video-left">

        <div class="card">

            
        
            <div class="single-video-content">
                <div class="categories">
                    <h4>Kwalifikacja: {{ $test->Kwalifikacja }}</h4>
                    <span>
                    
                    </span>
                </div>
                <h4>Treść zadania {{ $test->testimage }} </h4>
                <p>{{ $test->tresc_zadania }}</p>

                 
                <img src={{$content}}{{ $test->testimage }}  width="800" height="500" >
                

                <h4>Odpowiedzi:  </h4>
                <p>a. {{ $test->odpowiedz_a }}</p>
                <p>b. {{ $test->odpowiedz_b }}</p>
                <p>c. {{ $test->odpowiedz_c }}</p>
                <p>d. {{ $test->odpowiedz_d }}</p><hr>
                <p>Poprawna: {{ $test->poprawna_odpowiedz }}</p>


                <div class="edit-button">
                    <a href="/tests/{{ $test->id }}/edit"><button class="btn btn-primary btn-lg">
                        Edycja
                    </button></a>
                </div>
            </div>
            
        </div>
        
    </div>

   

    </div>

</div>
@stop