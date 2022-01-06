<?php

namespace App\Http\Controllers;

use App\Models\Character;
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
    public function homepage()
    {
        $characters = Character::all();
        return view('homepage', [
            'characters' => $characters,
        ]);
    }
}
