<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;
    protected $table = 'commands';

//    protected $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'code',
        'status',
    ];

}
