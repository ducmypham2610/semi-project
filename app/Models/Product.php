<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = "product";
    protected $fillable = ['product_id','product_name','product_description','product_price','product_imagae','category_id'];
    protected $primaryKey = 'product_id';
    public $timestamps = false;

    public function category() {
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
