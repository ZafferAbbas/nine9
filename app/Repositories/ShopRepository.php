<?php

namespace App\Repositories;

use App\Models\Shop;
use App\Repositories\BaseRepository;

class ShopRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'franchisee_id',
        'name',
        'location'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Shop::class;
    }
}
