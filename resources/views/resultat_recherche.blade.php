@extends('index')

@section('section')
<h2>Resultat de recherche</h2>

@foreach ($recettes as $recettes)

{{ $recettes->titre }}{{ $recettes->ingredients }}  {{ $recettes->photo }}

@endforeach



@stop
