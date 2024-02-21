<?php

namespace App\Repositories;

use App\Models\Sale;
use App\Repositories\BaseRepository;

class SaleRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'shop_id',
        'date',
        'total_sales'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Sale::class;
    }
}
