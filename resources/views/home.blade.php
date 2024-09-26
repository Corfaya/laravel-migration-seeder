@extends('layouts.app')

@section('cont')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">N. Carrozze</th>
                    <th scope="col">Ritardi</th>
                    <th scope="col">Stato</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train_info)
                  <tr>
                    <th scope="row">{{$train_info->id}}</th>
                    <td>{{ucfirst($train_info->azienda)}}</td>
                    <td>{{$train_info->stazione_di_partenza}}</td>
                    <td>{{$train_info->stazione_di_arrivo}}</td>

                    {{-- Se treno è cancellato --}}
                    @if ($train_info->cancellato)
                    <td colspan="2"></td>
                    {{-- Se treno è in servizio --}}
                    @else
                        @if ($train_info->orario_di_partenza > $train_info->orario_di_arrivo)
                            <td>Il treno è già partito</td>
                            <td>{{$train_info->orario_di_arrivo}}</td>
                        @else
                            <td>{{$train_info->orario_di_partenza}}</td>
                            <td>{{$train_info->orario_di_arrivo}}</td>
                        @endif
                    @endif
                    {{-- <td>{{$train_info->orario_di_arrivo}}</td> --}}
                    <td class="text-uppercase">{{$train_info->codice_treno}}</td>
                    <td>{{$train_info->numero_carrozze}}</td>
                    @if (!$train_info->in_orario)
                        <td>Treno in ritardo</td>
                    @else
                        <td class="{{$train_info->cancellato ? 'text-decoration-line-through' : ''}}">Treno in orario</td>
                    @endif
                    @if ($train_info->cancellato)
                        <td class="text-danger fw-bold">Cancellato</td>
                    @else
                        <td>In servizio</td>
                    @endif
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection