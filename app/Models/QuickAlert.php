<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuickAlert extends Model
{
    use HasFactory;

    protected $fillable = [
        'courier', 'tracking_no', 'description',	'value', 'weight'
    ];
}
