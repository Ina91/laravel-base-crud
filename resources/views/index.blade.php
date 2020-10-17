@extends('layouts.app')
@section('main')

    @foreach ($shoes as $shoe)

        <ul>
            <a href="{{route('shoes.show',$shoe->id)}}"> <li>{{$shoe->modello}}</li> </a>
            <li>{{$shoe->marca}}</li>
            <li>{{$shoe->taglia}}</li>

        </ul>


    @endforeach
@endsection
