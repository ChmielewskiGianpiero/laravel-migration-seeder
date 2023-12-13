@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="text-center py-4">Treni in arrivo</h1>
        <div class="card-group gap-2">
             @foreach ($trains as $train)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">da {{ $train->stazione_di_partenza}}</h5> 
                        <p class="card-text">{{ $train->orario_di_partenza }}</p>
                        <h6 class="card-title">a {{ $train->stazione_di_arrivo}}</h6>
                        <p class="card-text">{{ $train->orario_di_arrivo }}</p>
                     </div>
                </div>
            @endforeach    
            </div>
    </div>
@endsection