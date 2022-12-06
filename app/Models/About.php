<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

 protected $fillable=[
    'descrption',
    'image1',
    'image2',
    'image3',
    'user_id'];
}
