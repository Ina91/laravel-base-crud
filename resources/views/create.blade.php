<form action="{{route('shoes.store')}}" method="post">
    @csrf
    {{-- scriviamo a mano l'input --}}
    <input name="_method" type="hidden" value="POST">
    {{-- oppure usiamo blade --}}
    @method('POST')
    <label for="title">Modello</label>
    <input type="text" name="modello" placeholder="Inserisci il modello di scarpa">
    <label for="content">Marca</label>
    <input type="text" name="marca" placeholder="Inserisci la marca">
    <label for="content">Taglia</label>
    <input type="text" name="taglia" placeholder="Inserisci la taglia">
    <input type="submit" value="Invia">
</form>
