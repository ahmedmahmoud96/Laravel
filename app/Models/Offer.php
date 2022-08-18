<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table ="offers" ;
    protected $fillable =['name','price','detils'];
    protected $hidden=['updated_at','created_at'];
    public $timestamps=false;
}

