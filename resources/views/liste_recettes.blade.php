@extends('index')

@section('section')
<h2>Liste de toutes les recettes</h2>

@foreach ($recettes as $recettes)

{{ $recettes->titre }}{{ $recettes->ingredients }}  {{ $recettes->photo }}

@endforeach



@stop
