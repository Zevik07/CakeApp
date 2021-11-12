<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;
use App\Models\User;

class Order extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'note',
        'status'
    ];
    public $timestamp = true;


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class,'order_id');
    }
}