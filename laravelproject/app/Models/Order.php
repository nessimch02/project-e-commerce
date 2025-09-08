<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id'; // perché nella migration hai usato order_id

    protected $fillable = [
        'user_id',
        'total_price',
        'status',
        'order_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
