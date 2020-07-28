<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactpersonal extends Model
{
    protected $table='contactpersonal';
    protected $id='id';
    protected $updated_at='updated_at';
    protected $created_at='created_at';

    // public $timestamps = false;


    protected $fillable=[

        'email','address','phone'


    ];


}
