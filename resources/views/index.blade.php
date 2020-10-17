@extends('layouts.app')
@section('main')

    @foreach ($shoes as $shoe)

        <ul>
            <li>{{$shoe->modello}}</li>
            <li>{{$shoe->marca}}</li>
            <li>{{$shoe->taglia}}</li>

        </ul>


    @endforeach
@endsection
