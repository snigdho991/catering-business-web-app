<?php

namespace App\Models;

use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
    	'type_id',
        'name',
        'price',
        'description',
    ];

    public function serviceType(){
        return $this->belongsTo(ServiceType::class);
    }
}
