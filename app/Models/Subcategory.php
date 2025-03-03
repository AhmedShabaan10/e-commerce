<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories' ;
    use HasFactory;
    protected $guarded = [];
    

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
