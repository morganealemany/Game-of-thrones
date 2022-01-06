@extends('layout.app')

@section('content')

<section class="character-page">
    <div class="col-8">
         <h2>{{$character->first_name . ' ' . $character->last_name}}</h2>
         <div class="bio">
             <h3>Biographie</h3>
             <p>
                 {{$character->biography}}
             </p>
         </div>
     </div>
     <div class="col-4">
         <div class="avatar" style="background: #e3e3e3;">
             <img src="{{asset('assets/images' . '/' . $character->image)}}" alt="{{$character->first_name}}">
         </div>
         <div class="infos">
             <h3>Maisons</h3>
             <div class="houses">
                <ul>
                    @forelse($character->houses as $house)
                        <li class="house-logo" style="background: #e3e3e3;">
                            <a href="{{ route('house', ['id' =>$house->id]) }}">
                                <img src="{{asset('assets/images' . '/' . $house->image)}}" alt="{{$house->name}}">
                            </a>
                        </li>
                    @empty
                        <li> Pas de maisons!</li>
                    @endforelse
                </ul>
             </div>
             <ul class="meta">
                <li><span>Rang : </span> {{$character->title->name}}</li>
                <li><span>Mère : </span>
                    @if ($character->mother)
                        {{$character->mother->first_name . ' ' . $character->mother->last_name}}
                    @else
                        Non renseignée
                    @endif
                </li>
                <li><span>Père : </span>
                    @if ($character->father)
                        {{$character->father->first_name . ' ' . $character->father->last_name}}
                    @else
                        Non renseigné
                    @endif
                </li>
             </ul>
         </div>
     </div>
</section>

@endsection
