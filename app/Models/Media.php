<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'data_images';

//    protected $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'file_image',
        'timestart_capture',
        'station_id',
    ];
    
}
