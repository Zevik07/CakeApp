<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Cake extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $table = 'cakes';
    protected $fillable = [
        'name',
        'desc',
        'price',
        'quantity'
    ];
    // public $timestamp = true;

    /**
     * Get all of the user's image.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
    public function thumb()
    {
        return $this->morphMany(Image::class, 'imageable')
                    ->where('type', 'thumb');
    }
}
