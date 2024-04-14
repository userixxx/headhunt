<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'product_type', 'comments', 'budget'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
