@extends('layouts.app')
@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
    @endif
    <form action="{{(!empty($shoe))? route('shoes.update', $shoe->id) : route('shoes.store') }}" method="post">
        @csrf
        {{-- scriviamo a mano l'input --}}
        <input name="_method" type="hidden" value="POST">
        {{-- oppure usiamo blade --}}

        @if (!empty($shoe))
            @method('PATCH')   {{-- se non è vuoto mi prende la modifica altrimenti il post --}}
            <input type="hidden" name="id" value="{{$shoe->id}}">   {{-- necessario quando modifico dei campi ,rimane nascosto--}}
        @else
            @method('POST')
        @endif

        <label for="title">Modello</label>
        <input type="text" name="modello" placeholder="Modello di scarpa" value="{{(!empty($shoe))? $shoe->modello : old('modello') }}">
        <label for="content">Marca</label>
        <input type="text" name="marca" placeholder="Marca" value="{{(!empty($shoe))? $shoe->marca : old('marca') }}">
        <label for="content">Taglia</label>
        <input type="text" name="taglia" placeholder="Taglia" value="{{(!empty($shoe))? $shoe->taglia : old('taglia') }}">
        <input type="submit" value="Invia">
    </form>

@endsection
