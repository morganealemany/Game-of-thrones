@extends('layout.app')

@section('content')
<ul class="characters-list">

    <li class="character-card">
    <a href="#character/1">

        <div class="avatar" style="background: #e3e3e3;">
            <img src="{{asset('assets/images/arya.png')}}" alt="Arya">
        </div>
        <div class="name">
            Arya Stark
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/2">

        <div class="avatar" style="background: #e3e3e3;">
            <img src="{{asset('assets/images/eddard.png')}}" alt="Eddard">
        </div>
        <div class="name">
            Eddard Stark
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/3">

        <div class="avatar" style="background: #e3e3e3;">
            <img src="{{asset('assets/images/catelyn.png')}}" alt="Catelyn">
        </div>
        <div class="name">
            Catelyn Stark
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/4">

        <div class="avatar" style="background: #e3e3e3;">
            <img src="{{asset('assets/images/robb.png')}}" alt="Robb">
        </div>
        <div class="name">
            Robb Stark
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/5">

        <div class="avatar" style="background: #e3e3e3;">
            <img src="{{asset('assets/images/sansa.png')}}" alt="Sansa">
        </div>
        <div class="name">
            Sansa Stark
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/6">

        <div class="avatar" style="background: #e3e3e3;">
            <img src="{{asset('assets/images/bran.png')}}" alt="Bran">
        </div>
        <div class="name">
            Bran Stark
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/7">

        <div class="avatar" style="background: #e3e3e3;">
            <img src="{{asset('assets/images/rickon.png')}}" alt="Rickon">
        </div>
        <div class="name">
            Rickon Stark
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/8">

        <div class="avatar" style="background: #e3e3e3;">
            <img src="{{asset('assets/images/jonsnow.png')}}" alt="Jon">
        </div>
        <div class="name">
            Jon Snow
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/9">

        <div class="avatar" style="background: #baa207;">
            <img src="{{asset('assets/images/robert.png')}}" alt="Robert">
        </div>
        <div class="name">
            Robert Baratheon
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/10">

        <div class="avatar" style="background: #baa207;">
            <img src="{{asset('assets/images/cersei.png')}}" alt="Cersei">
        </div>
        <div class="name">
            Cersei Lannister
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/11">

        <div class="avatar" style="background: #baa207;">
            <img src="{{asset('assets/images/joffrey.png')}}" alt="Joffrey">
        </div>
        <div class="name">
            Joffrey Baratheon
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/12">

        <div class="avatar" style="background: #baa207;">
            <img src="{{asset('assets/images/myrcella.png')}}" alt="Myrcella">
        </div>
        <div class="name">
            Myrcella Baratheon
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/13">

        <div class="avatar" style="background: #baa207;">
            <img src="{{asset('assets/images/tommen.png')}}" alt="Tommen">
        </div>
        <div class="name">
            Tommen Baratheon
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/14">

        <div class="avatar" style="background: #6ebae6;">
            <img src="{{asset('assets/images/lysa.png')}}" alt="Lysa">
        </div>
        <div class="name">
            Lysa Arryn
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/15">

        <div class="avatar" style="background: #6ebae6;">
            <img src="{{asset('assets/images/robertarryn.png')}}" alt="Robert">
        </div>
        <div class="name">
            Robert Arryn
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/16">

        <div class="avatar" style="background: #a31a10;">
            <img src="{{asset('assets/images/tywin.png')}}" alt="Tywin">
        </div>
        <div class="name">
            Tywin Lannister
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/17">

        <div class="avatar" style="background: #a31a10;">
            <img src="{{asset('assets/images/jaime.png')}}" alt="Jaime">
        </div>
        <div class="name">
            Jaime Lannister
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/18">

        <div class="avatar" style="background: #a31a10;">
            <img src="{{asset('assets/images/tyrion.png')}}" alt="Tyrion">
        </div>
        <div class="name">
            Tyrion Lannister
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/19">

        <div class="avatar" style="background: #1c1c1c;">
            <img src="{{asset('assets/images/theon.png')}}" alt="Theon">
        </div>
        <div class="name">
            Theon Greyjoy
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/20">

        <div class="avatar" style="background: #111111;">
            <img src="{{asset('assets/images/daenerys.png')}}" alt="Daenerys">
        </div>
        <div class="name">
            Daenerys Targaryen
        </div>
    </a>
</li>
    <li class="character-card">
    <a href="#character/21">

        <div class="avatar" style="background: #111111;">
            <img src="{{asset('assets/images/viserys.png')}}" alt="Viserys">
        </div>
        <div class="name">
            Viserys Targaryen
        </div>
    </a>
</li>
</ul>
@endsection
