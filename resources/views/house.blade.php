@extends('layout.app')

@section('content')

<h2>Maison {{$house->name}}</h2>

@include('partials.list')
@endsection

