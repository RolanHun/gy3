<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    use HasFactory;
    protected $table = 'ingatlanok';
    public $timestamps = false;

    public function kategoria(){
        return $this->hasMany(Kategoria::class,'id','kategoria');
        
    }

}
