<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'from', 'to', 'adult', 'child', 'departure', 'seatclass'
     ];
}
