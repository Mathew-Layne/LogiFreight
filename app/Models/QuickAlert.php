<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuickAlert extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'courier', 'tracking_no', 'description',	'value', 'weight', 'invoice',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
