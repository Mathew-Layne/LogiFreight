<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manifest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'awb',	'start_date', 'end_date', 'no_of_items', 'date_received',
    ];

    public function packages(){
        return $this->hasMany(Package::class);
    }
}
