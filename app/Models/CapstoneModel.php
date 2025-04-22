<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CapstoneModel extends Model
{   
    public $timestamps = false;
    protected $table = 'capstone';
    protected $fillable = [
        'title',
        'year',
        'g_name',
        'file',
        'user_id',
        'desc',
        'type',
    ];
    protected $primaryKey = 'capstone_id';
}
