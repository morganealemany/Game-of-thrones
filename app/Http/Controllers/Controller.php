<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Display the home page
     *
     * @return void
     */
    public function homePage()
    {
        $characters = Character::all();
        return view('homepage', [
            'characters' => $characters,
        ]);
    }

    /**
     * Display the page of a given charatcer details
     *
     * @param [string] $id
     * @return void
     */
    public function characterPage($id)
    {
        // Retrieve the given character
        $character = Character::findOrFail($id);

        return view('characterpage', [
            'character' => $character,
        ]);
    }

    /**
     * Display the page of all houses
     *
     * @return void
     */
    public function houses()
    {
        //Retrieve all houses
        $houses = House::all();

        return view('houses', [
            'houses' => $houses,
        ]);
    }

    /**
     * Display the page for a given house
     *
     * @param [string] $id
     * @return void
     */
    public function house($id)
    {
        // Retrieve the given house
        $house = House::find($id);

        return view('house', [
            'house' => $house,
        ]);
    }
}
