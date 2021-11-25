<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manifest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'manifest_no',	'start_date', 'end_date', 'no_of_items'
    ];
}
