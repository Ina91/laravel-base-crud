@extends('layouts.app')
@section('main')

    @foreach ($shoes as $shoe)

        <ul>
            <a href="{{route('shoes.show',$shoe->id)}}"> <li>{{$shoe->modello}}</li> </a>
            <li>{{$shoe->marca}}</li>
            <li>{{$shoe->taglia}}</li>
            <li>
                <form action="{{route('shoes.update', $shoe->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="" value="Cancella">
                </form>
            </li>

        </ul>


    @endforeach
@endsection
