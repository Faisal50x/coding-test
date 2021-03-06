<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{
    protected $with = ['color', 'size', 'style'];

    public function color()
    {
        return $this->belongsTo(ProductVariant::class, 'product_variant_one');
    }

    public function size()
    {
        return $this->belongsTo(ProductVariant::class, 'product_variant_two');
    }
    public function style()
    {
        return $this->belongsTo(ProductVariant::class, 'product_variant_three');
    }
}
