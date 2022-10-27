<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
    	'type_id',
    	'user_id',
    	'first_name',
    	'last_name',
    	'phone',
    	'address',
    	'employee_type',
    ];
}
