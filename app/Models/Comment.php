<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'product_id', 'comment', 'rating', 'created_at', 'updated_at'
    ];

    public function product () {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
