<ul class="characters-list">

    @foreach ($characters as $character)
    <li class="character-card">
        <a href="{{route('character_page', ['id' =>$character->id]) }}">
            {{-- We will declare an houses table to use the first house color --}}
            <?php $houses = $character->houses ?>
            <div class="avatar" style="background: #{{$character->houses[0]->colour}};">
                <img src="{{asset('assets/images') . '/' . $character->image}}" alt="{{$character->first_name}}">
            </div>
            <div class="name">
                {{$character->first_name . ' ' . $character->last_name}}
            </div>
        </a>
    </li>

    @endforeach

</ul>
