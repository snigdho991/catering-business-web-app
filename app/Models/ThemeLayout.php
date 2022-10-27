<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeLayout extends Model
{
    use HasFactory;

    protected $fillable = ['name','service_type_id','layout_file','layout_image','price','custom'];

    public $timestamps = false;
}
