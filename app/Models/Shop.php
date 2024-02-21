<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public $table = 'shops';

    public $fillable = [
        'franchisee_id',
        'name',
        'location'
    ];

    protected $casts = [
        'name' => 'string',
        'location' => 'string'
    ];

    public static array $rules = [
        'franchisee_id' => 'required',
        'name' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function franchisee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Franchisee::class, 'franchisee_id');
    }

    public function expenses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Expense::class, 'shop_id');
    }

    public function sales(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Sale::class, 'shop_id');
    }
}
