<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class them extends Model
{
    use HasFactory;
    protected $fillable=['theam','user_id'];
    
    public $table='thems';
}
