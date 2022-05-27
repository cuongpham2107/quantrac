<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Station;

class Log extends Model
{
    use HasFactory;
    protected $table = 'logs';

//    protected $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'station_id',
        'code',
        'data',
    ];
    public function customers()
    {
        return $this->belongsTo(User::class,  'user_id', 'id');
    }
    public function stations()
    {
        return $this->belongsTo(Station::class,  'station_id', 'id');
    }
    
}
