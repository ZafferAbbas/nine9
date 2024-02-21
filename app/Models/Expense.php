<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public $table = 'expenses';

    public $fillable = [
        'shop_id',
        'date',
        'amount',
        'category',
        'description'
    ];

    protected $casts = [
        'date' => 'date',
        'amount' => 'decimal:2',
        'category' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'shop_id' => 'required',
        'date' => 'required',
        'amount' => 'required|numeric',
        'category' => 'required|string|max:255',
        'description' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function shop(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Shop::class, 'shop_id');
    }
}
