<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cake;
use App\Models\CakeDetail;

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
        'price',
        'note'
    ];
    public $timestamp = true;

    public function cake_details(){
        return $this->hasMany(CakeDetail::class,'cake_detail_id');
    }
    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }
}
