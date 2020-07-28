<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
   
    protected $table='setting';
    protected $id='id';
    protected $updated_at='updated_at';
    protected $created_at='created_at';
   
 
    // public $timestamps = false;

    protected $fillable=[

        'name','title'
    ];

}
