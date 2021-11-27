<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id', 'package_type_id', 'mailbox', 'weight', 'merchant', 'shipper',	'shipper_address',	'estimated_cost', 'shippers_tracking_no', 'internal_tracking_no', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
