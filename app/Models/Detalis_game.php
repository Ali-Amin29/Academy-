<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalis_game extends Model
{
    use HasFactory;
    public $table="detalis_Games";
    protected $fillable=['content','img','games_id'];
}
