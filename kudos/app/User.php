<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'avatar', 'avatar_original'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
