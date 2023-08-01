<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'thumbnail', 'link'];
    protected $table = 'stores';
    public $timestamps = true;
    use HasFactory;
}
