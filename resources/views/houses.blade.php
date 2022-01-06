@extends('layout.app')

@section('content')

<ul class="houses-list">
    @foreach ($houses as $house)
    <li class="house-logo" style="background: #{{$house->colour}};">
        <a href="/house/{{$house->id}}">
            <img src="{{asset('assets/images' . '/' . $house->image)}}" alt="{{$house->name}}">
        </a>
    </li>

    @endforeach




    {{-- <li class="house-logo" style="background: #baa207;">
        <a href="#/house/2">
            <img src="./Game of Thrones_files/baratheon.png" alt="Baratheon">
        </a>
    </li>
    <li class="house-logo" style="background: #2b3aab;">
        <a href="#/house/3">
            <img src="./Game of Thrones_files/tully.png" alt="Tully">
        </a>
    </li>
    <li class="house-logo" style="background: #6ebae6;">
        <a href="#/house/4">
            <img src="./Game of Thrones_files/arryn.png" alt="Arryn">
        </a>
    </li>
    <li class="house-logo" style="background: #a31a10;">
        <a href="#/house/5">
            <img src="./Game of Thrones_files/lannister.png" alt="Lannister">
        </a>
    </li>
    <li class="house-logo" style="background: #1c1c1c;">
        <a href="#/house/6">
            <img src="./Game of Thrones_files/greyjoy.png" alt="Greyjoy">
        </a>
    </li>
    <li class="house-logo" style="background: #1d6b2e;">
        <a href="#/house/7">
            <img src="./Game of Thrones_files/tyrell.png" alt="Tyrell">
        </a>
    </li>
    <li class="house-logo" style="background: #d6973e;">
        <a href="#/house/8">
            <img src="./Game of Thrones_files/martell.png" alt="Martell">
        </a>
    </li>
    <li class="house-logo" style="background: #111111;">
        <a href="#/house/9">
            <img src="./Game of Thrones_files/targaryen.png" alt="Targaryen">
        </a>
    </li> --}}
</ul>

@endsection
