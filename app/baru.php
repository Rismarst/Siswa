<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baru extends Model
{
    //
    protected $table='baru';
    protected $fillable=['title','content'];
    protected $visilable=['title','content'];
    public $timestamp=true;
}