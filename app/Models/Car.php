<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producer;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    // protected $fillable = ['make','image','name','pro_id'];
    public function producer(){
        return $this->belongsTo(Producer::class,'pro_id','id');
    }
}