<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'subject',
        'message'
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contacts';
}
