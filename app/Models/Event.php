<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

	protected $fillable = ['user_id','name','details','date','time','type','location','services','theme_id','total_cost','grand_total_cost','payment_receipt','total_services','completed_tasks'];

    public function creator(){
        return $this->belongsTo(User::class);
    }
}
