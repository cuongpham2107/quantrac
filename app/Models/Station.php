<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Config;

class Station extends Model
{
    use HasFactory;

    protected $table = 'stations';

//    protected $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'topic',
        'customer_id',
        'status',
        'uid',
        'address',
    ];

    public function customers()
    {
        return $this->belongsTo(User::class,  'customer_id', 'id');
    }

    public function configs() {
        return $this->belongsToMany(Config::class, 'pivot_stations_commands', 'station_id', 'command_id');
      }

}
