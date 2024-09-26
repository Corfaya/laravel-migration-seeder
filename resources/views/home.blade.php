@extends('layouts.app')

@section('cont')
    <ul class="list-unstyled">
        @foreach ($trains as $train_info)
            <li>{{$train_info->azienda}}</li>
        @endforeach
    </ul>
@endsection