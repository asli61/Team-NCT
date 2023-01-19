<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireTableInput extends Model
{
    use HasFactory;

    protected $table = "FireTable";

    protected $fillable = [
        'product_id',
    ];

    public function productToId()
    {
        return $this->belongsTo("ProductInfo", "id");
    }
}
