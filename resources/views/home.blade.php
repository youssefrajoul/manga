@extends('canevas')
@section('content')
@foreach ($series as $serie)
<div>
        <h3>
        {{$serie["titre"]}}
        </h3>
        <img src="img/{{$serie['couverture']}}" alt="couverture"  width="128" height="128">
        <p>
            Auteur: {{$serie["auteur"]}}
        </p>
        <p>
            Nombre de volumes: {{$serie["nombre_volumes"]}}
        </p>
        <p>
            Date création: {{$serie["date_premiere_parution"]}}
        </p>
        <p>
        La série est finie: {{$serie["serie_finie"]}}
        </p>
</div>
 @endforeach
@endsection