<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model {

    // Table name custom configuration
    protected $table = 'character';

    /**
     * Define the relation between character and title tables
     * A character can have only one title
     *
     * @return void
     */
    public function title()
    {
        return $this->hasOne('App\Models\Title', 'id', 'id_title');
    }

    /**
     * Define the relation between character and house tables
     * A character can belongs to many houses so we use the house_has_characters table to related them
     * @return void
     */
    public function houses()
    {
        return $this->belongsToMany('App\Models\House', 'house_has_characters', 'character', 'house');
    }

    /**
     * Define the relation between a character and his mother (another character)
     * A character can have only one mother
     *
     * @return void
     */
    public function mother()
    {
        return $this->hasOne(self::class, 'id', 'mother_id' );
    }

    /** Define the relation between a character and his father (another character)
     * A character can have only one father
     */
    public function father()
    {
        return $this->hasOne(self::class, 'id', 'father_id');
    }
}
