@extends('layouts.app')
@section('main')
    <ul>
        <li>{{$shoe->modello}}</li>
        <li>{{$shoe->marca}}</li>
        <li>{{$shoe->taglia}}</li>
    </ul>
@endsection
