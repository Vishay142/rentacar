<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auto extends Model
{
    use HasFactory;
    protected $table = 'auto';
    protected $guarded = [];

    public $timestamps = false;


}

