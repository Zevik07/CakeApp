<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CakeDetail extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $table = 'cakes';
    protected $fillable = [
        'cake_id',
        'flavor',
        'quantity'
    ];
}
