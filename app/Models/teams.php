<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    use HasFactory;
    
    protected $fillable=
    [
        'name','descrption','photo','game_id','user_id'
    ];
    protected $table="teams";




    public function Game()
    {
       return $this->hasOne(Game::class,'id');

       
    }

    
}
