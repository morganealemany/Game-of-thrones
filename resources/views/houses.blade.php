@extends('layout.app')

@section('content')

<ul class="houses-list">
    @foreach ($houses as $house)
    <li class="house-logo" style="background: #{{$house->colour}};">
        <a href="{{route('house', ['id' =>$house->id]) }}">
            <img src="{{asset('assets/images' . '/' . $house->image)}}" alt="{{$house->name}}">
        </a>
    </li>

    @endforeach
</ul>

@endsection
