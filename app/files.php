<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    protected $table='files';
    protected $id='id';
    protected $updated_at='updated_at';
    protected $created_at='created_at';
 
    // public $timestamps = false;

    protected $fillable=[

        'name','title','file'
    ];

}
