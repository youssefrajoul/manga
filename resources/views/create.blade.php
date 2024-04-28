@extends('canevas')
@section('content')

<form action="createSerie" method="get">
        @csrf
        <label for="titre">Titre:</label>
        <input name="titre" type="text" placeholder="Titre">
        <br><br>
        <label for="auteur">Auteur:</label>
        <input name="auteur" type="text" placeholder="Auteur">
        <br><br>
        <label for="vol">Nombre de volumes:</label>
        <input name="vol" type="number" placeholder="N° volumes">
        <br><br>
        <label for="date">Date:</label>
        <input name="date" type="date">
        <br><br>
        <label for="couverture">Couverture:</label>
        <input name="couverture" type="text" placeholder="Couverture">
        <br><br>
        <label for="finie">la serie est finie:</label>
        <input name="finie" type="checkbox">
        <br><br>
        <button type="submit">Créer la série</button>
</form>

@endsection