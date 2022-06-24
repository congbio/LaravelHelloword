<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Car;


class Producer extends Model
{
    use HasFactory;
    protected $table ="producers";
    protected $fillable =['pro_name'];
    public function cars(){
        return $this->hasMany(Car::class,'pro_id','id');
        
    }
    
}