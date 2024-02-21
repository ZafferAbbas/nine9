<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $table = 'sales';

    public $fillable = [
        'shop_id',
        'date',
        'total_sales'
    ];

    protected $casts = [
        'date' => 'date',
        'total_sales' => 'decimal:2'
    ];

    public static array $rules = [
        'shop_id' => 'required',
        'date' => 'required',
        'total_sales' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function shop(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Shop::class, 'shop_id');
    }
}
