<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model {

    // Table name custom configuration
    protected $table = 'house';

    /**
     * Define the relation between house and character
     * An house can have many characters
     *
     * @return void
     */
    public function characters()
    {
        return $this->hasMany('App\Models\Character', 'house_has_characters', 'house', 'character');
    }
}
