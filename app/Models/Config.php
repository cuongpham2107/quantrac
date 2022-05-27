<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Station;

class Config extends Model
{
    use HasFactory;
    protected $table = 'configs';

//    protected $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'resolution',
        'status',
    ];

   

}
