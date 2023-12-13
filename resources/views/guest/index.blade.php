@extends('layout.app')

@section('content')
    <div class="container">
        <div class="card-group">
             @foreach ($trains as $train)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->stazione_di_partenza}}</h5> 
                        <p class="card-text">{{ $train->orario_di_partenza }}</p>
                        <h6 class="card-title">{{ $train->stazione_di_arrivo}}</h6>
                        <p class="card-text">{{ $train->orario_di_arrivo }}</p>
                     </div>
                </div>
            @endforeach    
            </div>
    </div>
@endsection