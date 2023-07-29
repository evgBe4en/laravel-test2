<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ingredients',
        'price',
        'category_id',
        'image',
        'weight',
    ];

    protected $table = 'menus';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
