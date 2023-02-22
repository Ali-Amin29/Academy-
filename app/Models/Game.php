<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable=[
    'photo',
    'name',
    'descrption',
    'descrption1',
    'user_id'
        ];

 
    
  public function team()
 {
     return $this->hasOne(teams::class,'game_id');
 }

 public function user()
{
    return $this->belongsTo(User::class);
}

 } 
