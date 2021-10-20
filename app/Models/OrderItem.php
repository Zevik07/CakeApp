<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'order_items';
    protected $fillable = [
        'order_id',
        'cake_detail_id',
        'quantity',
        'note'
    ];
    public $timestamp = true;
}
