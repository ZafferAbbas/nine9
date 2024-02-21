<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Franchisee extends Model
{
    public $table = 'franchisees';

    public $fillable = [
        'user_id',
        'company_name',
        'contact_info'
    ];

    protected $casts = [
        'company_name' => 'string',
        'contact_info' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'company_name' => 'required|string|max:255',
        'contact_info' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function shops(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Shop::class, 'franchisee_id');
    }
}
